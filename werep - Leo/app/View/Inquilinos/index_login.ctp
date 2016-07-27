<h1> Acesso ao Sistema </h1>
<?php
    echo $this->Form->create('Inquilino', array('url' => 'login'));
    echo $this->Form->input('login', array('label' => 'Login:'));
    echo '<label> Senha:</label>';
    echo $this->Form->password('senha');
    echo $this->Form->end('Acessar');
?>
<button class="notice success">
<?php echo $this->Html->link('Voltar', array('controller' => 'menu', 'action'=> 'index'));?>
</button>
