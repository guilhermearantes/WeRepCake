<?php
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('estilo.css');
		echo $this->Html->css('bootstrap.min');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="interface">
		<nav id="menu">
			<h1><?php #echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
		</nav>
		<div id="content">
			<?php echo $this->Flash->render(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<footer id="rodape">
			<p>Copyright 2016 - by Equipe Werep<br/>
				<button type="actions">
				<?php echo $this->Html->link("Voltar ao Topo",
					  array( $this->fetch('controller'), $this->fetch('action')));?>
				</button>
			</p>
		</footer>
	</div>
	<?php #echo $this->element('sql_dump'); ?>
</body>
</html>
