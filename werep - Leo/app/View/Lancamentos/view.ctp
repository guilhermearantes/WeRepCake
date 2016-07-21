<h1>Dados do Lançamento:</h1>

<p>Código: <?php echo $lancamento['Lancamento']['id'] ?> </p>
<p>Nome: <?php echo $lancamento['Lancamento']['nome'] ?> </p>
<p>Data de Inserção: <?php echo $lancamento['Lancamento']['data_entrada'] ?> </p>
<p>Categoria: <?php echo $lancamento['Lancamento']['categoria'] ?> </p>
<p>Valor: <?php echo $lancamento['Lancamento']['valor'] ?> </p>
<p>Valor: <?php echo $lancamento['Lancamento']['imagem'] ?> </p>

<?php echo $this->Html->link('Editar', array('controller' => 'lancamentos', 'action'=> 'edit', $lancamento['Lancamento']['id'])); ?>
<?php echo $this->Html->link('Excluir', array('controller' => 'lancamentos', 'action'=> 'del', $lancamento['Lancamento']['id']),array('confirm'=>'Deseja Excluir?')); ?>

<?php echo $this->Html->link("Voltar",array('controller' => 'lancamentos','action' => 'index')); ?>
