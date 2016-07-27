<span class="notice success">
    <?php
        echo $this->Html->link("Exames",
        array('controller' => 'exames', 'action' => '../../exames/index'));
     ?>
</span>

<span class="notice success">
    <?php
        echo $this->Html->link("Procedimentos",
        array('controller' => 'procedimentos', 'action' => '../../procedimentos/index'));
     ?>
</span>

<span class="notice success">
    <?php
        echo $this->Html->link("Pacientes",
        array('controller' => 'pacientes', 'action' => '../../pacientes/index'));
     ?>
</span>

<span class="notice success">
    <?php
        echo $this->Html->link("Sair do Sistema",
        array('controller' => 'pacientes', 'action' => '../../pacientes/index_login/logout'));
     ?>
</span>
