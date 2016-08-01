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
    public function admin_listar(){
        $this->set('moradias', $this->Moradia->find('all'));
    }
    
     public function admin_view($codigo){
        $moradia = $this->Moradia->findById($codigo);
        $this->set('moradia', $moradia);
    }
    
    public function admin_edit($codigo){
        
        if(empty($this->request->data)){
            //data vazia => campos para edição
            
            //carregar os dados para exibição
            $Moradias = $this->Moradia->find('list', array('fields' => array('id')));
            
            //setar na view a váriavel com os dados 
            $this->set('moradias', $Moradias);
            
            //recuperar dados atuais
            
            $this->request->data = $this->Moradia->findById($codigo);
            
        }else{
            //Persistir os dados
            if($this->Moradia->save($this->request->data)){
                //$this->Flash->set('Moradia editada com sucesso!');
                $this->redirect(array('action' => 'admin_listar'));
            }
        }
    }
        
        public function admin_del($codigo){
            
            $this->Moradia->delete($codigo);
            //$this->Flash->set('Moradia excluida com sucesso!');
            $this->redirect(array('action' => 'admin_listar'));
            
        }
}
?>
