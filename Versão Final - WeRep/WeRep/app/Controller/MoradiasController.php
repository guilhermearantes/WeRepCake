<?php
class MoradiasController extends AppController {

    public $helpers = array('Html');

    public function index(){
        $this->set('moradias', $this->Moradia->find('all'));
    }

    public function index_in(){
    }

    public function view($codigo){
        $moradia = $this->Moradia->findById($codigo);
        $this->set('moradia', $moradia);
    }

    public function view_in(){
        $inquilino = $this->Session->read('Inquilino');
        $moradia = $inquilino['0']['Moradia'];
        $this->set('moradia', $moradia);
    }

    public function add(){
        if($this->Moradia->Save($this->request->data)){
            $this->Flash->set('Cadastro feito com sucesso!');
            $this->redirect(array('controller'=>'menu', 'action'=>'index_in'));
        }
    }
}
?>
