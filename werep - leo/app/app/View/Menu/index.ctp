<span class="notice success">
    <?php
        echo $this->Html->link("Login Paciente",
        array('controller' => 'pacientes', 'action' => 'index_login'));
     ?>
</span>
<span class="notice success">
    <?php
        echo $this->Html->link("Criar conta Paciente",
        array('controller' => 'pacientes', 'action' => 'add_paciente'));
     ?>
</span>
<span class="notice success">
    <?php
        echo $this->Html->link("Login Administrativo",
        array('controller' => 'menu', 'action' => 'index_admin'));
     ?>
</span>
<span class="notice success">
    <?php
        echo $this->Html->link("Procedimentos",
        array('controller' => 'procedimentos', 'action' => 'index'));
     ?>
</span>
