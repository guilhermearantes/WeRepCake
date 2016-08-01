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
	            
	            
	            <li><?php echo $this->Html->link("Inserir uma nova Moradia para ser administrada",
                          array('controller' => 'moradias', 'action' => 'add'));?></li>
	           
	        </ul>
		</nav>

        <h1>Relação de Moradias</h1>
        <table class="table table-striped table-hover">
          <tr>
            <th>Nome</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Bairro</th>
            <th>Rua</th>
            <th>Número</th>
            <th>Telefone</th>
            <th>Data de Fundação</th>
          </tr>

          <?php foreach ($moradias as $m): ?>
            <tr>
              <td>
                <?php echo $this->Html->link($m['Moradia']['nome'],
                        array('controller' => 'moradias',
                              'action' => 'admin_view', $m['Moradia']['id']));  ?>
              </td>
              <td>
                <?php echo $m['Moradia']['cidade']; ?>
              </td>
              <td>
                <?php echo $m['Moradia']['estado']; ?>
              </td>
              <td>
                <?php echo $m['Moradia']['bairro']; ?>
              </td>
              <td>
                <?php echo $m['Moradia']['rua']; ?>
              </td>
              <td>
                <?php echo $m['Moradia']['numero']; ?>
              </td>
              <td>
                <?php echo $m['Moradia']['telefone']; ?>
              </td>
              <td>
                <?php echo $m['Moradia']['data_fundacao']; ?>
              </td>
            </tr>
          <?php endforeach; ?>
        </table>
        
         <div id="button">
            
            <button>
            <?php echo $this->Html->link('Voltar', array('controller' => 'menu', 'action'=> 'index'));?>
            </button>
            
         </div>
    
	</interface>
</body>
</html>
