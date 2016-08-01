<?php
class PacientesController extends AppController{
    public $helpers = array('Html', 'Form');

    public $components = array('Flash');

    public function index_login(){
    }
    public function index_admin(){
        $this->set('pacientes', $this->Paciente->find('all', ['order' => ['nome' => 'ASC']]));
    }
    public function index(){
        $this->set('pacientes', $this->Paciente->find('all', ['order' => ['nome' => 'ASC']]));
    }

    public function view($codigo){
        $paciente = $this->Paciente->findById($codigo);
        $this->set('paciente', $paciente);
    }

    public function view_paciente($codigo){
        $paciente = $this->Paciente->findById($codigo);
        $this->set('paciente', $paciente);
    }

    public function view_admin($codigo){
        $paciente = $this->Paciente->findById($codigo);
        $this->set('paciente', $paciente);
    }

    public function login(){
        if(!empty($this->data['Paciente']['login'])){

            //Validar
            $paciente = $this->Paciente->findAllByLoginAndSenha(
                $this->data['Paciente']['login'],
                $this->data['Paciente']['senha']);

            //Se estiver correto
            /*if(!empty($paciente)){
                //Se for o admin que estiver logando no sistema
                if($this->data['Paciente']['login'] == 'admin'
                && $this->data['Paciente']['senha'] == 'admin'){
                    $this->Flash->set('Acesso Administrativo realizado com sucesso!');
                    $this->redirect(array('controller'=>'administrativo','action'=>'../View/Pages/home_admin'));
                }else{
                    $this->Flash->set('Acesso realizado com sucesso!');
                    $this->redirect(array('action' => '../menu/index'));
                }
                $this->Session->write('Paciente', $paciente);
                exit();
            }*/
            if(!empty($paciente)){
                $this->Flash->set('Acesso realizado com sucesso!');
                $this->Session->write('Paciente', $paciente);
                $this->redirect(array('controller' => 'menu','action' => 'index_paciente'));
                exit();
            }
            //caso contrario
            else{
                $this->Flash->set('Usuário ou senha inválidos!');
                $this->redirect(array('action' => 'index_login'));
                exit();
            }
        }
    }

    public function logout(){
        $this->Session->destroy();
        $this->Flash->set('Atividades encerradas com sucesso!');
        $this->redirect(array('controller' => 'menu','action' => 'index'));
        //$this->redirect(array('action'=>'index_login'));
        exit();
    }

    //public function add_paciente(){
    //    if(empty($this->request->data)){
    //        $this->Flash->set('Preencha todos os campos!');
    //    } else{
    //        if($this->Paciente->Save($this->request->data)){
    //            $this->Flash->set('Cadastro feito com sucesso!');
    //            $this->redirect(array('controller' => 'menu','action' => 'index'));
    //        }
    //    }
    //}

    public function add_paciente() {
        if (!empty($this->data)) {
            if ($this->Paciente->Save($this->data)) {
                $this->Flash->set('Cadastro feito com sucesso!');
                $this->redirect(array('controller' => 'menu','action' => 'index'));
            }
        }
    }

    public function edit_paciente($codigo) {
        if(empty($this->request->data)){
        } else{
            if($this->Paciente->Save($this->request->data)){
                $this->del_paciente($codigo,'Conta editada com sucesso');
                $this->Flash->set('Conta editada com sucesso!');
                $this->logout();
            }
        }
    }

    public function del_paciente($codigo,$msg) {
        $this->Paciente->delete($codigo);
        if(empty($msg)){
            $this->Flash->set('Conta excluída com Sucesso!');
        }else{
            $this->Flash->set($msg);
        }
        $this->logout();
    }
}
