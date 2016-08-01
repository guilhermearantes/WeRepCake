<span class="notice success">
    <?php
        echo $this->Html->link("Exames",
        array('controller' => 'exames', 'action' => 'index_admin'));
     ?>
</span>

<span class="notice success">
    <?php
        echo $this->Html->link("Procedimentos",
        array('controller' => 'procedimentos', 'action' => 'index_admin'));
     ?>
</span>

<span class="notice success">
    <?php
        echo $this->Html->link("Adicionar novo procedimento",
        array('controller' => 'procedimentos', 'action' => 'add_admin'));
     ?>
</span>

<span class="notice success">
    <?php
        echo $this->Html->link("Pacientes",
        array('controller' => 'pacientes', 'action' => 'index_admin'));
     ?>
</span>
<notice class="notice success">
    <?php
        echo $this->Html->link("Sair do Sistema",
        array('controller' => 'pacientes', 'action' => 'logout'));
     ?>
</notice>
