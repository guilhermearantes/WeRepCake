<h1>Cadastro de Paciente </h1>
<?php
    echo $this->Form->create('Paciente');
    echo $this->Form->input('nome');
?>
<h3>Login</h3>
<?php
    echo $this->Form->login('login');
?>
<h3>Senha</h3>
<?php
    echo $this->Form->password('senha');
    echo $this->Form->end('Salvar');
 ?>

 <button class="actions">
     <?php echo $this->Html->link("Menu",array('controller' => 'menu','action' => 'index'));?>
 </button>
