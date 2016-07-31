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
        <h1>Inserir Dados sobre o novo lançamento</h1>
        <?php
         echo $this->Form->create('Lancamento');
        ?>
        <table>
            <tr><td>
                <?php echo $this->Form->input('nome');?>
            </td></tr>
            <tr><td>
                <?php echo $this->Form->input('data_entrada');?>
            </td></tr>
            <tr><td>
                <?php echo $this->Form->input('categoria');?>
            </td></tr>
            <tr><td>
                <?php echo $this->Form->input('valor');?>
            </td></tr>
            <tr><td>
                <?php echo $this->Form->input('imagem');?>
            </td></tr>
            <tr><td>
                <h1>Conta relacionada:</h1>
                <?php echo $this->Form->select('conta_id', $contas, array('empty' => 'Selecione:'));?>
            </td></tr>
        </table>
        <?php
            echo $this->Form->end('Salvar');
         ?>
        <button class="actions">
        <?php echo $this->Html->link("Todos Lancamentos",array('controller' => 'Lancamentos','action' => 'index_in'));?>
        </button>
        <button class="actions">
        <?php echo $this->Html->link("Meus Lançamentos",array('controller' => 'Lancamentos','action' => 'index_inquilino'));?>
        </button>

	</interface>
</body>
</html>
