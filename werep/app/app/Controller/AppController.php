<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    //esta função ocorre depois de uma busca através de uma url na barra de pesquisas
    //portanto se o endereço digitado for diferente de /index_login, deve-se verificar se
    //o usuário está logado no sistema
    public function afterFilter(){
        /*
        if($this->controller == 'exames'){
            $this->autenticar();
        }*/



            /*if($this->action != 'menu/#'){
                if($this->action != 'procedimentos/#'){
                    if($this->action != 'index_login'){
                        $this->autenticar();
                    }
                }
            }*/
            if($this->action != 'index' && $this->action != 'index_admin' && $this->action != 'view_admin'
                && $this->action != 'add_paciente' && $this->action != 'add_admin' && $this->action != 'edit_admin' && $this->action != 'view' && $this->action != 'index_login'){
                $this->autenticar();
            }

    }

    public function autenticar(){
        if(! $this->Session->check('Paciente')){
            $this->redirect(array('controller'=>'pacientes','action'=>'index_login'));
            exit();
        }else {
            $paciente = $this->Session->read('Paciente');
            $this->Flash->set('Paciente: ' . $paciente['0']['Paciente']['login']);
        }
    }
}
