<?php

class ContasController extends AppController {

  public $helpers = array('Html');

    
  public function index() {
    $this->set('contas', $this->Conta->find('all'));
  }

  public function view($codigo) {

    // Criar
        $conta = $this->Conta->findById($codigo);
        $this->set('conta', $conta);

  }


}


?>
