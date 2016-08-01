<?php
class MenuController extends AppController{
    public $helpers = array('Html', 'Form');

    public $components = array('Flash');

    public function index(){
    }

    public function index_paciente(){
        $paciente = $this->Session->read('Paciente');
        $this->set('paciente',$paciente);
    }

    public function index_admin(){
    }
}
 ?>
