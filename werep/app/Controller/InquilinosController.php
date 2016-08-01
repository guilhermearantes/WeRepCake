<?php

class InquilinosController extends AppController {

    public $helpers = array('Html');

    public function index_in() {
        $this->set('inquilinos', $this->Inquilino->find('all'));
    }

    public function view_in($codigo) {
        $inquilino = $this->Inquilino->findById($codigo);
        $this->set('inquilino', $inquilino);
    }

    public function view($codigo) {
        #$sessao = $this->Session->read('Inquilino');
        #$moradiaID = $sessao['0']['Moradia']['id'];
        #$this->set('moradiaID', $moradiaID);
        #$busca = $this->Inquilino->query("SELECT *
        #            FROM inquilinos, moradias
        #            WHERE inquilinos.moradia_id = $moradiaID
        #            GROUP BY inquilinos.id
        #            ;");
        #$inquilinos = $this->Inquilino->findById($moradiaID);
        #$this->set('inquilino', $inquilino);
    }

    public function index_login(){
        //exibe campos de usuario e senha
    }

    public function login(){
        if(!empty($this->data['Inquilino']['login'])){
            /***
            $username = $this->data['Inquilino']['login'];
            $plainText = $this->data['Inquilino']['senha'];

            $user = current($this->Inquilino->findByUsername($username));

            Security::setHash('blowfish');
            $blowfished = Security::hash($plainText, 'blowfish', $user['senha']);

            if ($blowfished === $user['senha']) {
                return true; // user exists, password is correct
            }

            $oldSalt = Configure::read('configure.this');
            $md5ed = Security::hash($plainText, 'md5', $oldSalt);

            if ($md5ed === $user['senha']) {
                $this->User->id = $user['id'];

                $blowfished = Security::hash($plainText);
                $this->User->saveField('senha', $blowfished);

                return true; // user exists, password now updated to blowfish
            }
            return false; // user's password does not exist.
            */
            //$s = ('md5,'$this->data['Inquilino']['senha']);
            //validar
            $inquilino = $this->Inquilino->findAllByLoginAndSenha(
            $this->data['Inquilino']['login'],
            $this->data['Inquilino']['senha']);
            //se estiver correto:
            if(!empty($inquilino)){
                $this->Flash->set('Acesso realizado com sucesso!');
                $this->Session->write('Inquilino', $inquilino);
                $this->redirect(array('controller' => 'menu','action' => 'index_in'));
                exit();
            }else{
             //caso contrário
                $this->Flash->set('Usuário e/ou senha inválidos!!');
                $this->redirect(array('action' => 'index_login'));
                exit();
            }
        }
    }

    public function logout(){
        $this->Session->destroy();
        $this->Flash->set('Atividades encerradas com sucesso!');
        $this->redirect(array('controller' => 'menu','action' => 'index'));
        exit();
    }

    public function add_novo(){
        $moradias = $this->Inquilino->Moradia->find('list', array('fields' => array('id', 'nome')));
        $sexo = array(['Masculino'],['Feminino']);
        $this->set('moradias', $moradias);
        $this->set('sexo', $sexo);
        if($this->Inquilino->Save($this->request->data)){
            $this->Flash->set('Cadastro feito com sucesso!');
            $this->redirect(array('action' => '../'));
        }
    }
}
?>
