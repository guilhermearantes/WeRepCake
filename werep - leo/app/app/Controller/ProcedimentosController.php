<?php
class ProcedimentosController extends AppController{
    public $helpers = array('Html', 'Form');

    public $components = array('Flash');

    public function index(){
        //$this->set('procedimentos', $this->Procedimento->find('all'));
        $this->set('procedimentos',$this->Procedimento->find('all'));
    }

    public function index_paciente(){
        $this->set('procedimentos', $this->Procedimento->find('all', ['order' => ['nome' => 'ASC']]));
    }

    public function index_admin(){
        $this->set('procedimentos', $this->Procedimento->find('all', ['order' => ['nome' => 'ASC']]));
    }

    public function view($codigo){
        $procedimento = $this->Procedimento->findById($codigo);
        $this->set('procedimento', $procedimento);
    }

    public function view_admin($codigo){
        $procedimento = $this->Procedimento->findById($codigo);
        $this->set('procedimento', $procedimento);
    }

    public function view_paciente($codigo){
        $procedimento = $this->Procedimento->findById($codigo);
        $this->set('procedimento', $procedimento);
    }

    public function add_admin() {
        if (!empty($this->data)) {
            if ($this->Procedimento->Save($this->data)) {
                $this->Flash->set('Cadastro de procedimento feito com sucesso!');
                $this->redirect(array('controller' => 'menu','action' => 'index_admin'));
            }
        }
    }

    public function edit_admin($codigo) {
        if(empty($this->request->data)){
        } else{
            if($this->Procedimento->Save($this->request->data)){
                $this->del_admin($codigo);
                $this->Flash->set('Procedimento editado com sucesso!');
                $this->redirect(array('action' => 'index_admin'));
            }
        }
    }

    public function del_admin($codigo) {
        $this->Procedimento->delete($codigo);
        $this->Flash->set('Procedimento excluído com Sucesso!');
        $this->redirect(array('action' => 'index_admin'));
    }
}
 ?>
