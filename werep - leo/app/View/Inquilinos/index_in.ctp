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
        <h1>Relação de Moradores</h1>
        <table>
          <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Apelido</th>
            <th>Celular</th>
            <th>Email</th>
            <th>Data de Nascimento</th>
            <th>Naturalidade</th>
            <th>Sexo</th>
          </tr>

          <?php foreach ($inquilinos as $i): ?>
            <tr>


              <td>
                <?php echo $i['Inquilino']['id']; ?>
              </td>

              <td>
                <?php echo $this->Html->link($i['Inquilino']['nome'],array('controller' => 'inquilinos',
                    'action' => 'view_in', $i['Inquilino']['id']));  ?>
              </td>

              <td>
                <?php echo $i['Inquilino']['apelido']; ?>
              </td>

              <td>
                <?php echo $i['Inquilino']['celular']; ?>
              </td>

              <td>
                <?php echo $i['Inquilino']['email']; ?>
              </td>

              <td>
                <?php echo $i['Inquilino']['data_nascimento']; ?>
              </td>

              <td>
                <?php echo $i['Inquilino']['naturalidade']; ?>
              </td>

              <td>
                <?php echo $i['Inquilino']['sexo']; ?>
              </td>

            </tr>
          <?php endforeach; ?>
        </table>

	</interface>
</body>
</html>
