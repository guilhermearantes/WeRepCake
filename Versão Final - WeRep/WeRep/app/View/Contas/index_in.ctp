<table class="table table-striped table-hover">
    <tr>
        <th>Nome</th>
        <th>Valor</th>
        <th>Tipo</th>
        <th>Valor do Rateio</th>
        <th>Editar</th>
    </tr>

    <?php foreach ($contas as $c): ?>
        <tr>
            <td>
                <?php echo $this->Html->link($c['contas']['nome'],
                    array('controller' => 'contas','action' => 'view_in', $c['contas']['id'])); ?>
            </td><td>
                <?php echo $c['contas']['saldo']; ?> R$
            </td><td>
                <?php echo $c['contas']['tipo']; ?>
            </td><td>
                <?php echo $c['contas']['valor_rateio']; ?> R$
            </td>
            <td>
                <?php if($c['contas']['nome']!='Conta Corrente'){
                    echo $this->Html->link('Editar Valor', array('controller' => 'contas', 'action'=> 'edit', $c['contas']['id'])); }?>
            </td>
        </tr>
  <?php endforeach; ?>
</table>
