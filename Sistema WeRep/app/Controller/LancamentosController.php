<?php

class LancamentosController extends AppController {

    public $helpers = array('Html', 'Form');
    public $components = array('Flash');

    public function index_in() {
        $sessao = $this->Session->read('Inquilino');
        $moradiaID = $sessao['0']['Moradia']['id'];
        $lancamentosInquilinos = $this->Lancamento->Inquilino->query("SELECT *
                    FROM lancamentos, inquilinos
                    WHERE lancamentos.moradia_id = $moradiaID
                    AND inquilinos.moradia_id = $moradiaID
                    AND lancamentos.inquilino_id = inquilinos.id
                    GROUP BY lancamentos.id
                    ORDER BY lancamentos.nome
                    ;");
        $this->set('lancamentosInquilinos',$lancamentosInquilinos);
        #Debugger::dump($lancamentosInquilinos);
    }

    public function index_inquilino() {
        $sessao = $this->Session->read('Inquilino');
        $inquilinoID = $sessao['0']['Inquilino']['id'];
        $busca = $this->Lancamento->query("SELECT *
                    FROM lancamentos
                    WHERE lancamentos.inquilino_id = $inquilinoID
                    GROUP BY lancamentos.id
                    ORDER BY lancamentos.nome
                    ;");
        $this->set('lancamentosInquilino',$busca);
    }

    public function view($codigo) {
        $sessao = $this->Session->read('Inquilino');
        $busca = $this->Lancamento->query("SELECT *
                    FROM lancamentos,inquilinos
                    WHERE lancamentos.id = $codigo
                    AND inquilinos.id = lancamentos.inquilino_id
                    ORDER BY lancamentos.nome
                    #GROUP BY inquilinos.id
                    ;");
        $this->set('lancamentoInquilino',$busca['0']);
    }

    public function view_in($codigo) {
        $sessao = $this->Session->read('Inquilino');
        $busca = $this->Lancamento->query("SELECT *
                    FROM lancamentos,inquilinos
                    WHERE lancamentos.id = $codigo
                    AND inquilinos.id = lancamentos.inquilino_id
                    ORDER BY lancamentos.nome
                    #GROUP BY inquilinos.id
                    ;");
        $this->set('lancamentoInquilino',$busca['0']);
    }

    public function add(){
        if(empty($this->request->data)){
            //Data vazia  => campos para inserção
            //carregar os dados para exibição
            $inquilinos = $this->Lancamento->Inquilino->find('list', array('fields' => array('id', 'nome')));

            //Setar na view a variável com os dados da conta e do inquilino
            $this->set('inquilinos', $inquilinos);
            #$this->set('contas', $contas);
        } else{
            $sessao = $this->Session->read('Inquilino');
            $moradiaID = $sessao['0']['Moradia']['id'];
            $conta = $this->Lancamento->query("SELECT *
                        FROM contas
                        WHERE contas.moradia_id = $moradiaID
                        AND contas.nome = 'Conta Corrente'
                        ;");
            $this->request->data ['Lancamento']['conta_id'] = $conta['0']['contas']['id'];
            $this->request->data ['Lancamento']['inquilino_id'] = $sessao['0']['Inquilino']['id'];
            $this->request->data ['Lancamento']['moradia_id'] = $sessao['0']['Moradia']['id'];

            if($this->Lancamento->Save($this->request->data)){
                $this->Flash->set('Lancamento feito com sucesso!');
                $this->redirect(array('action' => 'index_in'));
            }
        }
    }

    public function edit($codigo){
        if(empty($this->request->data)){
            $inquilinos = $this->Lancamento->Inquilino->find('list', array('fields' => array('id', 'nome')));
            #$contas = $this->Lancamento->Conta->find('list', array('fields' => array('id', 'nome')));

            //Setar na view a variável com os dados da conta e do inquilino
            $this->set('inquilinos', $inquilinos);
            #$this->set('contas', $contas);

            //Recuperar os dados atuais
            $this->request->data = $this->Lancamento->findById($codigo);
        } else{
            $sessao = $this->Session->read('Inquilino');
            $moradiaID = $sessao['0']['Moradia']['id'];
            $conta = $this->Lancamento->query("SELECT *
                        FROM contas
                        WHERE contas.moradia_id = $moradiaID
                        AND contas.nome = 'Conta Corrente'
                        ;");
            $this->request->data ['Lancamento']['conta_id'] = $conta['0']['contas']['id'];
            $this->request->data ['Lancamento']['inquilino_id'] = $sessao['0']['Inquilino']['id'];
            $this->request->data ['Lancamento']['moradia_id'] = $sessao['0']['Moradia']['id'];

            if($this->Lancamento->Save($this->request->data)){
                $this->Lancamento->delete($codigo);
                $this->Flash->set('Lançamento editado com sucesso!');
                $this->redirect(array('action' => 'index_in'));
            }
        }
    }

    public function del($codigo){
        $this->Lancamento->delete($codigo);
        $this->Flash->set('Lançamento excluído com Sucesso!');
        $this->redirect(array('action' => 'index_inquilino'));
    }
}
?>
