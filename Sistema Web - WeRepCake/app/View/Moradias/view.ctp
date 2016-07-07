<h1>Dados das Moradias:</h1>

<p>Código: <?php echo $moradia['Moradia']['id'] ?> </p>
<p>Nome: <?php echo $moradia['Moradia']['nome'] ?> </p>
<p>Fundação: <?php echo $moradia['Moradia']['data_fundacao'] ?> </p>

<?php

  echo $this->Html->link("Voltar",
        array('controller' => 'moradias',
              'action' => 'index'));

 ?>
