<?php

class LancamentosController extends AppController {

  public $helpers = array('Html', 'Form');
  public $components = array('Flash');

  public function index() {
    $this->set('lancamentos', $this->Lancamento->find('all'));
  }

  public function view($codigo) {

    // Criar
        $lancamento = $this->Lancamento->findById($codigo);
        $this->set('lancamento', $lancamento);

  }
  

}


 ?>
