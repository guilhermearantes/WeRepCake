<?php
$cakeDescription = __d('cake_dev', 'Werep: Uma nova maneira de gerenciar moradias');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		
		echo $this->Html->css('estilo.css');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
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


	<div id="container">
		<div id="content">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">

		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</div>
</body>
</html>
