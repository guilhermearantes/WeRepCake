<?php
App::uses('AppController', 'Controller');
/**
 * Estados Controller
 */
class MoradiasController extends AppController {

    public $helpers = array('Html');
    
    public function index(){
        
        $this->set('moradias', $this->Moradia->find('all'));
        
        
    }
    
    public function view($codigo){
        
        $moradia = $this->Moradia->findById($codigo);
        $this->set('moradia', $moradia);
        
    }
    
}
