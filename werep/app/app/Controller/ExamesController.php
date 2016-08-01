<?php
class ExamesController extends AppController{
    public $helpers = array('Html', 'Form');

    public $components = array('Flash');

    public function index_paciente(){
        $paciente = $this->Session->read('Paciente');
        $pacienteID = $paciente['0']['Paciente']['id'];
        $this->set('exames', $this->Exame->find('all', [
            'conditions' => ['Paciente.id' =>$pacienteID]]));
        $busca = $this->Exame->query("SELECT SUM(procedimentos.preco) total_procedimento
                    FROM pacientes, procedimentos, exames
                    WHERE exames.paciente_id = $pacienteID
                    AND exames.procedimento_id = procedimentos.id
                    GROUP BY pacientes.id
                    ;");
        $this->set('total_procedimento',0);
        if(!empty($busca[$pacienteID]['0']['total_procedimento'])){
            $this->set('total_procedimento', $busca[$pacienteID]['0']['total_procedimento']);
        }
    }

    public function index_admin(){
    $this->set('exames', $this->Exame->find('all', ['order' => ['data' => 'DESC']]));
    $busca = $this->Exame->query("SELECT SUM(procedimentos.preco) total_procedimento
                FROM pacientes, procedimentos, exames
                WHERE exames.paciente_id = pacientes.id
                AND exames.procedimento_id = procedimentos.id
                ;");
    $this->set('total_procedimento', $busca['0']['0']['total_procedimento']);
    }


#SELECT pacientes.id, pacientes.nome, procedimentos.id, procedimentos.nome, procedimentos.preco
#FROM pacientes, procedimentos, exames
#WHERE exames.paciente_id = pacientes.id
#AND exames.procedimento_id = procedimentos.id

#SELECT pacientes.id, pacientes.nome, procedimentos.id, procedimentos.nome, SUM(procedimentos.preco) #total_procedimento, COUNT(exames.id) as num_exames
#FROM pacientes, procedimentos, exames
#WHERE exames.paciente_id = pacientes.id
#AND exames.procedimento_id = procedimentos.id
#GROUP BY pacientes.id, pacientes.nome, procedimentos.id, procedimentos.nome



    public function add_paciente(){
        //Debugger::dump($this);
        if(empty($this->request->data)){
            //Data vazia  => campos para inserção
            //carregar os pacientes e procedimentos para exibição
            $paciente = $this->Session->read('Paciente');
            $pacientes = $this->Exame->Paciente->find('first', array(
                'conditions' => array('Paciente.id' => $paciente['0']['Paciente']['id'])));

            //$pacientes = $this->Exame->Paciente->find('list', array('fields' => array('id', 'nome')));
            $procedimentos = $this->Exame->Procedimento->find('list', array('fields' => array('id', 'nome','preco')));

            //Setar na view a variável com os dados do paciente e do procedimento
            $this->set('pacientes', $pacientes);
            $this->set('procedimentos', $procedimentos);
        } else{
            $paciente = $this->Session->read('Paciente');
            $this->request->data ['Exame']['paciente_id'] = $paciente['0']['Paciente']['id'];
            if($this->Exame->Save($this->request->data)){
                $this->Flash->set('Exame solicitado com sucesso!');
                $this->redirect(array('action' => 'index_paciente'));
            }
        }
    }
    public function edit_paciente($codigo){
        if(empty($this->request->data)){
            //Data vazia  => campos para edição
            //carregar os exames para exibição
            $paciente = $this->Session->read('Paciente');
            $pacientes = $this->Exame->Paciente->find('first', array(
                'conditions' => array('Paciente.id' => $paciente['0']['Paciente']['id'])));
            $procedimentos = $this->Exame->Procedimento->find('list', array('fields' => array('id', 'nome')));

            //Setar na view a variável com os dados do paciente e do procedimento
            $this->set('pacientes', $pacientes);
            $this->set('procedimentos', $procedimentos);

            //Recuperar os dados atuais
            $this->request->data = $this->Exame->findById($codigo);
        } else{
            $paciente = $this->Session->read('Paciente');
            $this->request->data ['Exame']['paciente_id'] = $paciente['0']['Paciente']['id'];
            if($this->Exame->Save($this->request->data)){
                $this->del_paciente($codigo);
                $this->Flash->set('Exame editado com sucesso!');
                $this->redirect(array('action' => 'index_paciente'));
            }
        }
    }

    public function del_paciente($codigo){
        $this->Exame->delete($codigo);
        $this->Flash->set('Exame excluído com Sucesso!');
        $this->redirect(array('action' => 'index_paciente'));
    }
}
 ?>
