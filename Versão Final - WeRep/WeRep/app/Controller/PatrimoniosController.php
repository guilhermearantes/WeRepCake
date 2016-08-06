<?php
class PatrimoniosController extends AppController {

    public $helpers = array('Html');

    public function index_in() {
        #$this->set('patrimonios', $this->Patrimonio->find('all'));

        $sessao = $this->Session->read('Inquilino');
        $moradiaID = $sessao['0']['Moradia']['id'];
        $patrimonios = $this->Patrimonio->Moradia->query("SELECT *
                    FROM patrimonios, moradias
                    WHERE patrimonios.moradia_id = $moradiaID
                    GROUP BY patrimonios.id
                    ;");
        $this->set('patrimonios',$patrimonios);
    }

    public function view_in($codigo) {
        $patrimonio = $this->Patrimonio->findById($codigo);
        $this->set('patrimonio', $patrimonio);
    }

    public function add() {
        if (empty($this->request->data)) {

            $moradias = $this->Patrimonio->Moradia->find('list', array('fields' => array('id', 'nome')));

            $this->set('moradias', $moradias);

        } else {
            $sessao = $this->Session->read('Inquilino');
            $this->request->data ['Patrimonio']['moradia_id'] = $sessao['0']['Moradia']['id'];
            if ($this->Patrimonio->save($this->request->data)) {
                $this->Flash->set('Patrimônio inserido com Sucesso !');
                $this->redirect(array('action' => 'index_in'));
            }
        }
    }

    public function edit($codigo){
             if(empty ($this->request->data)){
            //data vazia => CAMPOS PARA INSERÇÃO

            //carregar os estados para exibição
            $estados = $this->Patrimonio->find('list', array('fields' =>array('id', 'nome')));
            //setar na view a variavel com os dados dos estados
            //recuperar os dados atuais
             $this->request->data = $this->Patrimonio->findById($codigo);

        }else{
            //persistir dados
            if($this->Patrimonio->save($this->request->data)){
                $this->Flash->set('Patrimônio editado com sucesso');
                $this->redirect(array('action' => 'index'));
            }
        }

    }
    public function del($codigo){
        $this->Estado->delete($codigo);
        $this->Flash->set('Patrimônio excluído com sucesso');
        $this->redirect(array('action' => 'index'));
    }
}
?>
