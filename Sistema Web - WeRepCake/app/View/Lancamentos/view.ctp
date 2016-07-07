<h1>Dados dos Lançamentos:</h1>

<p>Código: <?php echo $lancamento['Lancamento']['id'] ?> </p>
<p>Nome: <?php echo $lancamento['Lancamento']['nome'] ?> </p>
<p>Data de Inserção: <?php echo $lancamento['Lancamento']['data_insercao'] ?> </p>
<p>Categoria: <?php echo $lancamento['Lancamento']['categoria'] ?> </p>
<p>Valor: <?php echo $lancamento['Lancamento']['valor'] ?> </p>

<?php

  echo $this->Html->link("Voltar",
        array('controller' => 'lancamentos',
              'action' => 'index'));

 ?>
