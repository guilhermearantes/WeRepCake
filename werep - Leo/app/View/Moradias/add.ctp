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

        <h1>Inserir Dados sobre o nova Moradia</h1>
        <?php echo $this->Form->create('Moradia');?>
        <table>
        <p><?php echo $this->Form->input('nome');  ?></p>
        <p><?php echo $this->Form->input('cidade'); ?></p>
        <p><?php echo $this->Form->input('estado'); ?></p>
        <p><?php echo $this->Form->input('bairro'); ?></p>
        <p><?php echo $this->Form->input('rua'); ?></p>
        <p><?php echo $this->Form->input('numero'); ?></p>
        <p><?php echo $this->Form->input('complemento'); ?></p>
        <p><?php echo $this->Form->input('telefone'); ?></p>
        <p>Data de Fundação:
        <?php echo $this->Form->date('data_fundacao'); ?>
        </p>
        <p>E-mail:
        <?php echo $this->Form->email('email'); ?>
        </p>
        </table>

        <?php echo $this->Form->end('Salvar');?>

         <button class="actions">
             <?php echo $this->Html->link("Moradias",array('controller' => 'Moradia','action' => 'index'));?>
         </button>

	</interface>
</body>
</html>
