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
	            <li><?php echo $this->Html->link("Inquilinos",
                          array('controller' => 'inquilinos', 'action' => 'index_in')); ?></li>
	            <li><?php echo $this->Html->link("Meus Lancamentos",
                          array('controller' => 'lancamentos', 'action' => 'index_inquilino')); ?></li>
	            <li><?php echo $this->Html->link("Todos Lancamentos",
                          array('controller' => 'lancamentos', 'action' => 'index_in')); ?></li>
	            <li><?php echo $this->Html->link("Moradia",
                          array('controller' => 'moradias', 'action' => 'view_in')); ?></li>
                <li><?php echo $this->Html->link("Sair do Sistema",
                    array('controller' => 'inquilinos', 'action' => 'logout')); ?></li>
	        </ul>
		</nav>
        <h1>Dados do Morador:</h1>

        <p>Código: <?php echo $inquilino['Inquilino']['id'] ?> </p>
        <p>Nome: <?php echo $inquilino['Inquilino']['nome'] ?> </p>
        <p>Apelido: <?php echo $inquilino['Inquilino']['apelido'] ?> </p>
        <p>Celular: <?php echo $inquilino['Inquilino']['celular'] ?> </p>
        <p>Email: <?php echo $inquilino['Inquilino']['id'] ?> </p>
        <p>Data de Nascimento: <?php echo $inquilino['Inquilino']['data_nascimento'] ?> </p>
        <p>Naturalidade: <?php echo $inquilino['Inquilino']['naturalidade'] ?> </p>
        <p>Sexo: <?php echo $inquilino['Inquilino']['sexo'] ?> </p>

        <?php echo $this->Html->link("Menu", array('controller' => 'menu','action' => 'index_in'));?>
        
	</interface>
</body>
</html>
