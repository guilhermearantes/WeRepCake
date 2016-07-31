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
        <h1>Relação de todos Lançamentos</h1>
        <button style="actions"> <?php
                echo $this->Html->link("Adicionar novo Lançamento",
                array('controller' => 'lancamentos', 'action' => 'add'));
        ?></button>
        <button style="actions"> <?php
                echo $this->Html->link("Menu",array('controller' => 'menu', 'action' => 'index_in'));
        ?></button>
        <table>
            <tr>
                <th>Código</th>
                <th>Nome Lançamento</th>
                <th>Nome Inquilino</th>
                <th>Data de Inserção</th>
                <th>Categoria</th>
                <th>Valor</th>
                <th>Imagem</th>
            </tr>

            <?php foreach ($lancamentosInquilinos as $l): ?>
                <tr>
                    <td>
                        <?php echo $l['lancamentos']['id']; ?>
                    </td>
                    <td>
                        <?php echo $this->Html->link($l['lancamentos']['nome'],
                        array('controller' => 'lancamentos','action' => 'view_in', $l['lancamentos']['id'])); ?>
                    </td>
                    <td>
                        <?php echo $this->Html->link($l['inquilinos']['nome'],
                        array('controller' => 'inquilinos','action' => 'view_in', $l['inquilinos']['id'])); ?>
                    </td>
                    <td>
                        <?php echo $l['lancamentos']['data_entrada']; ?>
                    </td>
                    <td>
                        <?php echo $l['lancamentos']['categoria']; ?>
                    </td>
                    <td>
                        <?php echo $l['lancamentos']['valor']; ?>
                    </td>
                    <td>
                        <?php echo base64_decode($l['lancamentos']['imagem']); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        
	</interface>
</body>
</html>
