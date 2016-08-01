
<notice class="notice success">
    <?php
        echo $this->Html->link("Meus exames",
        array('controller' => 'exames', 'action' => 'index_paciente'));
        //echo $this->Html->link("Meus exames",
        //    array('controller' => 'exames', 'action'=> 'index_paciente', $pacienteSessao['Paciente']['id']));
     ?>
</notice>

<notice class="notice success">
    <?php
        echo $this->Html->link("Procedimentos",
        array('controller' => 'procedimentos', 'action' => 'index_paciente'));
     ?>
</notice>

<notice class="notice success">
    <?php
        echo $this->Html->link("Minha conta",
        array('controller' => 'pacientes', 'action' => 'view_paciente',$paciente['0']['Paciente']['id']));

     ?>
</notice>

<notice class="notice success">
    <?php
        echo $this->Html->link("Sair do Sistema",
        array('controller' => 'pacientes', 'action' => 'logout'));
     ?>
</notice>
