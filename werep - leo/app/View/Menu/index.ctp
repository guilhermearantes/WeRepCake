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
	<div id="interface">
		<nav id="menu">
	        <h1>Menu Principal</h1>
	        <ul type="disc">
	            <li><?php echo $this->Html->link("Login",
                          array('controller' => 'inquilinos', 'action' => 'index_login'));?></li>
	            <li><?php echo $this->Html->link("Se cadastrar em uma Moradia já existente",
                          array('controller' => 'inquilinos', 'action' => 'add_novo'));?></li>
	            <li><?php echo $this->Html->link("Inserir uma nova Moradia para ser administrada",
                          array('controller' => 'inquilinos', 'action' => 'index_login'));?></li>
	            <li><?php echo $this->Html->link("Moradias existentes",
                          array('controller' => 'moradias', 'action' => 'index'));?></li>
	        </ul>
		</nav>
	</interface>
</body>
</html>
