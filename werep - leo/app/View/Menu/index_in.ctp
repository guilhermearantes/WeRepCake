<span class="notice success">
    <?php
        echo $this->Html->link("Inquilinos",
        array('controller' => 'inquilinos', 'action' => 'index_in'));
     ?>
</span>

<span class="notice success">
    <?php
        echo $this->Html->link("Meus Lancamentos",
        array('controller' => 'lancamentos', 'action' => 'index_inquilino'));
     ?>
</span>

<span class="notice success">
    <?php
        echo $this->Html->link("Todos Lancamentos",
        array('controller' => 'lancamentos', 'action' => 'index_in'));
     ?>
</span>

<span class="notice success">
    <?php
        echo $this->Html->link("Moradia",
        array('controller' => 'moradias', 'action' => 'view_in'));
     ?>
</span>

<span class="notice success">
    <?php
        echo $this->Html->link("Sair do Sistema",
        array('controller' => 'inquilinos', 'action' => 'logout'));
     ?>
</span>
