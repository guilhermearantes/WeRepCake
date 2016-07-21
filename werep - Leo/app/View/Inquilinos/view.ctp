<h1>Dados dos Moradores:</h1>

<p>Código: <?php echo $inquilino['Inquilino']['id'] ?> </p>
<p>Nome: <?php echo $inquilino['Inquilino']['nome'] ?> </p>
<p>Apelido: <?php echo $inquilino['Inquilino']['apelido'] ?> </p>
<p>Celular: <?php echo $inquilino['Inquilino']['celular'] ?> </p>
<p>Email: <?php echo $inquilino['Inquilino']['id'] ?> </p>
<p>Data de Nascimento: <?php echo $inquilino['Inquilino']['data_nascimento'] ?> </p>
<p>Naturalidade: <?php echo $inquilino['Inquilino']['naturalidade'] ?> </p>
<p>Sexo: <?php echo $inquilino['Inquilino']['sexo'] ?> </p>

<?php

  echo $this->Html->link("Voltar",
        array('controller' => 'inquilinos',
              'action' => 'index'));

 ?>
