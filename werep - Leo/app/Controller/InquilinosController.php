<?php

class InquilinosController extends AppController {

  public $helpers = array('Html');


    
  public function index() {
    $this->set('inquilinos', $this->Inquilino->find('all'));
  }

  public function view($codigo) {

    // Criar
        $inquilino = $this->Inquilino->findById($codigo);
        $this->set('inquilino', $inquilino);

  }
    
    
    public function index_login(){
        //exibe campos de usuario e senha
        
        
    }
    
    public function login(){
        //validar usuario e verificar se esta setado
        
        if(!empty($this->data['Inquilino']['login'])){
            //validar
            
            $inquilino = $this->Inquilino->findAllByLoginAndSenha( $this->data['Inquilino']['login'], $this->data['Inquilino']['senha'] );
                
            //se estiver correto:
            if(!empty($inquilino)){
                
                $this->Flash->set('Acesso realizado com sucesso!');                
                $this->Session->write('Inquilino', $inquilino);                
                $this->redirect('/');
                exit();
                
            }else{
             //caso contrário                
                $this->Flash->set('Usuário e/ou senha inválidos!!');
                $this->redirect(array('action' => 'index_login'));
                exit();                
            }    
        }
    }  


}


?>



