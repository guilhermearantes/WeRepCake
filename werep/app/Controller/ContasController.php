<?php

class ContasController extends AppController {

  public $helpers = array('Html');


  public function index_in() {
    $this->set('contas', $this->Conta->find('all'));
  }

  public function view_in($codigo) {

    // Criar
        $conta = $this->Conta->findById($codigo);
        $this->set('conta', $conta);

  }


}


?>
