<h2 class="notice success">Acesso ao sistema</h2>
<?php
    echo $this->Form->create('Paciente',
        array('url' => 'login'));

    echo $this->Form->input('login',
        array('label'=>'Login: '));
    echo '<label>Senha: </label>';
    echo $this->Form->password('senha');
    echo $this->Form->end('Acessar');
?>

<button class="actions">
    <?php echo $this->Html->link("Menu", array('controller' => 'menu', 'action' => 'index')); ?>
</button>
