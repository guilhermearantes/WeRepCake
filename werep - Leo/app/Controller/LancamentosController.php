<?php

class LancamentosController extends AppController {

    public $helpers = array('Html', 'Form');
    public $components = array('Flash');

    public function index() {
        $this->set('lancamentos', $this->Lancamento->find('all'));
        //Debugger::dump($this->Lancamento->find('all'));
    }

    public function view($codigo) {
        $lancamento = $this->Lancamento->findById($codigo);
        $this->set('lancamento', $lancamento);
    }

    public function add(){
        //Debugger::dump($this);
        if(empty($this->request->data)){
            //Data vazia  => campos para inserção
            //carregar os dados para exibição
            //$paciente = $this->Session->read('Paciente');
            //$pacientes = $this->Exame->Paciente->find('first', array(
            //    'conditions' => array('Paciente.id' => $paciente['0']['Paciente']['id'])));

            $inquilinos = $this->Lancamento->Inquilino->find('list', array('fields' => array('id', 'nome')));
            $contas = $this->Lancamento->Conta->find('list', array('fields' => array('id', 'nome')));

            //Setar na view a variável com os dados da conta e do inquilino
            $this->set('inquilinos', $inquilinos);
            $this->set('contas', $contas);
        } else{
            #$paciente = $this->Session->read('Paciente');
            #$this->request->data ['Exame']['paciente_id'] = $paciente['0']['Paciente']['id'];
            if($this->Lancamento->Save($this->request->data)){
                $this->Flash->set('Lancamento feito com sucesso!');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function edit($codigo){
        if(empty($this->request->data)){
            //Data vazia  => campos para inserção
            //carregar os dados para exibição

            $inquilinos = $this->Lancamento->Inquilino->find('list', array('fields' => array('id', 'nome')));
            $contas = $this->Lancamento->Conta->find('list', array('fields' => array('id', 'nome')));

            //Setar na view a variável com os dados da conta e do inquilino
            $this->set('inquilinos', $inquilinos);
            $this->set('contas', $contas);

            //Recuperar os dados atuais
            $this->request->data = $this->Lancamento->findById($codigo);
        } else{
            //$paciente = $this->Session->read('Paciente');
            //$this->request->data ['Exame']['paciente_id'] = $paciente['0']['Paciente']['id'];
            if($this->Lancamento->Save($this->request->data)){
                $this->Lancamento->delete($codigo);
                $this->Flash->set('Lançamento editado com sucesso!');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function del($codigo){
        $this->Lancamento->delete($codigo);
        $this->Flash->set('Lançamento excluído com Sucesso!');
        $this->redirect(array('action' => 'index'));
    }
}
?>
