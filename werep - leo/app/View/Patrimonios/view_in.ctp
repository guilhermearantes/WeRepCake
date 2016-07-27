<h1>Dados dos Patrimonios:</h1>

<p>Código: <?php echo $patrimonio['Patrimonio']['id'] ?> </p>
<p>Nome: <?php echo $patrimonio['Patrimonio']['nome'] ?> </p>
<p>Data de Entrada: <?php echo $patrimonio['Patrimonio']['data_entrada'] ?> </p>
<p>Depreciação: <?php echo $patrimonio['Patrimonio']['depreciacao'] ?> </p>
<p>Manutenção: <?php echo $patrimonio['Patrimonio']['manutencao'] ?> </p>

<?php

  echo $this->Html->link("Voltar",
        array('controller' => 'patrimonios',
              'action' => 'index'));

 ?>
