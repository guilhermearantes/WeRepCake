<?php

class InquilinosController extends AppController {

    public $helpers = array('Html');

    public function index_in() {
        #$this->set('inquilinos', $this->Inquilino->find('all'));
        $sessao = $this->Session->read('Inquilino');
        $MoradiaID = $sessao['0']['Moradia']['id'];
        $inquilinos = $this->Inquilino->query("SELECT *
                    FROM inquilinos
                    WHERE inquilinos.moradia_id = $MoradiaID
                    ORDER BY inquilinos.nome
                    ;");
        $this->set('inquilinos',$inquilinos);
        #Debugger::dump($inquilinos);
    }

    public function view_in($codigo) {
        $inquilino = $this->Inquilino->findById($codigo);
        $this->set('inquilino', $inquilino);
    }

public function view($codigo) {
        $inquilino = $this->Inquilino->findById($codigo);
        $this->set('inquilino', $inquilino);
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

    public function logout(){
        $this->Session->destroy();
        $this->Flash->set('Atividades encerradas com sucesso!');
        $this->redirect(array('controller'=>'inquilinos','action' => 'index_login'));
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

    public function edit($codigo){
        $sessao = $this->Session->read('Inquilino');
        $moradiaID = $sessao['0']['Moradia']['id'];
        $inquilinoID = $sessao['0']['Inquilino']['id'];
        $lancamentosInquilinos = $this->Inquilino->query("SELECT *
                    FROM lancamentos, inquilinos
                    WHERE lancamentos.moradia_id = $moradiaID
                    AND inquilinos.moradia_id = $moradiaID
                    AND lancamentos.inquilino_id = $inquilinoID
                    GROUP BY inquilinos.id
                    ORDER BY lancamentos.nome
                    ;");
        $this->set('lancamentosInquilinos',$lancamentosInquilinos);
        if(empty($this->request->data)){
        } else{
            $moradiaID = $sessao['0']['Moradia']['id'];
            $this->request->data ['Inquilino']['moradia_id'] = $sessao['0']['Moradia']['id'];
            if($lancamentosInquilinos == null){
                if($this->Inquilino->Save($this->request->data)){
                    $this->Inquilino->delete($codigo);
                    $this->Flash->set('Conta editada com sucesso!');
                }
                $this->Inquilino->delete($codigo);
                $this->redirect(array('controller'=>'inquilinos','action' => 'logout'));
            }
            else{
                $this->Flash->set('Exclua seu(s) lançamento(s) antes de alterar seus dados!');
            }
        }
    }
}
?>
