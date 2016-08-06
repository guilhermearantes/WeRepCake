<?php

class ContasController extends AppController {

    public $helpers = array('Html');

    public function index_in(){
        $sessao = $this->Session->read('Inquilino');
        $moradiaID = $sessao['0']['Moradia']['id'];
        $contas = $this->Conta->query("SELECT *
                    FROM contas
                    WHERE contas.moradia_id = $moradiaID
                    ORDER BY contas.nome
                    ;");
        $this->set('contas', $contas);
    }

    public function index_rateio() {
        $sessao = $this->Session->read('Inquilino');
        $moradiaID = $sessao['0']['Moradia']['id'];
        $rateioContaPoupanca = $this->Conta->Moradia->query("SELECT valor_rateio
                    FROM contas,moradias
                    WHERE contas.moradia_id = $moradiaID
                    AND contas.nome = 'Conta Poupanca'
                    GROUP BY contas.id
                    ORDER BY contas.nome
                    ;");
        $rateioContaCorrente = $this->Conta->Moradia->query("SELECT valor_rateio
                    FROM contas,moradias
                    WHERE contas.moradia_id = $moradiaID
                    AND contas.nome = 'Conta Corrente'
                    GROUP BY contas.id
                    ORDER BY contas.nome
                    ;");
        $this->set('rateioContaPoupanca',$rateioContaPoupanca['0']);
        $this->set('rateioContaCorrente',$rateioContaCorrente['0']);
        $total = $rateioContaPoupanca['0']['contas']['valor_rateio'] + $rateioContaCorrente['0']['contas']['valor_rateio'];
        $this->set('total',$total);
    }

    public function view_in($codigo) {
        $sessao = $this->Session->read('Inquilino');
        $moradiaID = $sessao['0']['Moradia']['id'];
        $conta = $this->Conta->query("SELECT *
                    FROM contas
                    WHERE contas.id = $codigo
                    ;");
        $this->set('conta', $conta);
    }

    public function edit($codigo){
        if(empty($this->request->data)){
        } else{
            $sessao = $this->Session->read('Inquilino');
            $moradiaID = $sessao['0']['Moradia']['id'];
            $conta = $this->Conta->query("SELECT *
                        FROM contas
                        WHERE contas.id = $codigo
                        AND contas.moradia_id = $moradiaID
                        ;");
            if($conta){
                #$this->request->data ['Lancamento']['conta_id'] = $conta['0']['contas']['id'];
                $this->request->data ['Conta']['nome'] = $conta['0']['contas']['nome'];
                $this->request->data ['Conta']['tipo'] = $conta['0']['contas']['tipo'];
                $this->request->data ['Conta']['valor_rateio'] = 0;
                $this->request->data ['Conta']['moradia_id'] = $sessao['0']['Moradia']['id'];

                if($this->Conta->Save($this->request->data)){
                    $this->Conta->delete($codigo);
                    $this->Flash->set('Conta editada com sucesso!');
                    $this->redirect(array('action' => 'index_in'));
                }
            }else{
                $this->Flash->set('Conta não encontrada!');
            }
        }
    }
}
?>
