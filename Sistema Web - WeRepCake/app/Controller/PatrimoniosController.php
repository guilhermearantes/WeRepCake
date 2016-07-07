<?php

class PatrimoniosController extends AppController {

  public $helpers = array('Html');

  public function index() {
    $this->set('patrimonios', $this->Patrimonio->find('all'));
  }

  public function view($codigo) {

    // Criar
        $patrimonio = $this->Patrimonio->findById($codigo);
        $this->set('patrimonio', $patrimonio);

  }  


}


?>
