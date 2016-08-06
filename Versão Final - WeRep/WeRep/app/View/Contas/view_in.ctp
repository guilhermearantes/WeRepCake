<h1>Dados das Contas:</h1>

<p>Código: <?php echo $conta['0']['contas']['id'] ?> </p>
<p>Nome: <?php echo $conta['0']['contas']['nome'] ?> </p>
<p>Valor: <?php echo $conta['0']['contas']['saldo'] ?> R$ </p>
<p>Tipo: <?php echo $conta['0']['contas']['tipo'] ?> </p>
<p>Valor do Rateio: <?php echo $conta['0']['contas']['valor_rateio'] ?> R$ </p>
<?php if($conta['0']['contas']['nome']!='Conta Corrente'){
    echo $this->Html->link('Editar Valor',
    array('controller' => 'contas', 'action'=> 'edit', $conta['0']['contas']['id'])); }?>
