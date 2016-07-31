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


        <h1>Dados da Moradia:</h1>
        <table>
        <p>Código:
        <?php echo $moradia['id']; ?>
        </p>
        <p>Nome:
        <?php echo $moradia['nome'];  ?>
        </p>
        <p>Cidade:
        <?php echo $moradia['cidade']; ?>
        </p>
        <p>Estado:
        <?php echo $moradia['estado']; ?>
        </p>
        <p>Bairro:
        <?php echo $moradia['bairro']; ?>
        </p>
        <p>Rua:
        <?php echo $moradia['rua']; ?>
        </p>
        <p>Número:
        <?php echo $moradia['numero']; ?>
        </p>
        <p>Complemento:
        <?php echo $moradia['complemento']; ?>
        </p>
        <p>Telefone:
        <?php echo $moradia['telefone']; ?>
        </p>
        <p>Data de Fundação:
        <?php echo $moradia['data_fundacao']; ?>
        </p>
        <p>E-mail:
        <?php echo $moradia['email']; ?>
        </p>
        </table>

        <button>
        <?php echo $this->Html->link("Voltar",array('controller' => 'menu','action' => 'index_in'));?>
    </button>

	</interface>
</body>
</html>
