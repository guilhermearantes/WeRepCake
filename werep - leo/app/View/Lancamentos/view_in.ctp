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
        <h1>Dados do Lançamento:</h1>

        <p>Código: <?php echo $lancamentoInquilino['lancamentos']['id'] ?> </p>
        <p>Nome do lançamento: <?php echo $lancamentoInquilino['lancamentos']['nome'] ?> </p>
        <p>Nome do inquilino: <?php echo $this->Html->link($lancamentoInquilino['inquilinos']['nome'],
            array('controller' => 'inquilinos','action' => 'view_in', $lancamentoInquilino['inquilinos']['id'])); ?>
        <p>Data de Inserção: <?php echo $lancamentoInquilino['lancamentos']['data_entrada'] ?> </p>
        <p>Categoria: <?php echo $lancamentoInquilino['lancamentos']['categoria'] ?> </p>
        <p>Valor: <?php echo $lancamentoInquilino['lancamentos']['valor'] ?> </p>
        <p>Imagem: <?php echo $lancamentoInquilino['lancamentos']['imagem'] ?> </p>

        <button style="actions">
            <?php echo $this->Html->link('Editar', array('controller' => 'lancamentos', 'action'=> 'edit', $lancamentoInquilino['lancamentos']['id'])); ?>
        </button>
        <button style="actions">
            <?php echo $this->Html->link('Excluir', array('controller' => 'lancamentos', 'action'=> 'del', $lancamentoInquilino['lancamentos']['id']),array('confirm'=>'Deseja Excluir?')); ?>
        </button>
        <button style="actions">
            <?php echo $this->Html->link("Menu",array('controller' => 'menu','action' => 'index_in')); ?>
        </button>

	</interface>
</body>
</html>
