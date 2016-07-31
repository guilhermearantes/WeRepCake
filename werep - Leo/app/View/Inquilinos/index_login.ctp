<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>Menu inquilino</title>
	<?php
		echo $this->Html->css('estilo.css');
    	echo $this->Html->css('bootstrap.css');
	?>
</head>
<body>
	<div id="login">
        <h1> Acesso ao Sistema </h1>
        <?php
            echo $this->Form->create('Inquilino', array('url' => 'login'));
            echo $this->Form->input('login', array('label' => 'Login:'));
        ?>
        <?php
            echo '<label> Senha:</label>';
            echo $this->Form->password('senha');
        ?>
        <div id="button">
            <?php echo $this->Form->end('Acessar');?>
            <button>
            <?php echo $this->Html->link('Voltar', array('controller' => 'menu', 'action'=> 'index'));?>
            </button>
        </div>

	</div>
</body>
</html>
