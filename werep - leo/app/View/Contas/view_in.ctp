<h1>Dados das Contas:</h1>

<p>Código: <?php echo $conta['Conta']['id'] ?> </p>
<p>Nome: <?php echo $conta['Conta']['nome'] ?> </p>
<p>Saldo: <?php echo $conta['Conta']['saldo'] ?> </p>
<p>Tipo: <?php echo $conta['Conta']['tipo'] ?> </p>
<p>Valor do Rateio: <?php echo $conta['Conta']['valor_rateio'] ?> </p>

<?php

  echo $this->Html->link("Voltar",
        array('controller' => 'contas',
              'action' => 'index'));

 ?>
