<span class="notice success">
    <?php
        echo $this->Html->link("Login",
        array('controller' => 'inquilinos', 'action' => 'index_login'));
     ?>
</span>

<span class="notice success">
    <?php
        echo $this->Html->link("Se cadastrar em uma Moradia já existente",
        array('controller' => 'inquilinos', 'action' => 'add_novo'));
     ?>
</span>

<span class="notice success">
    <?php
        echo $this->Html->link("Inserir uma nova Moradia para ser administrada",
        array('controller' => 'inquilinos', 'action' => 'index_login'));
     ?>
</span>

<span class="notice success">
    <?php
        echo $this->Html->link("Moradias existentes",
        array('controller' => 'moradias', 'action' => 'index'));
     ?>
</span>
