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


}


?>
