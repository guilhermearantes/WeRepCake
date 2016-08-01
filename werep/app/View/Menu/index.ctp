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
				<?php echo $this->Html->image('WR-Logo.png'); ?>
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
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1876.549018883818!2d-43.16910722767557!3d-19.83580432252337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa507513d245fe3%3A0x86586b79387537f9!2sUFOP+-+ICEA!5e0!3m2!1spt-BR!2sbr!4v1469991378310" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</interface>
</body>
</html>
