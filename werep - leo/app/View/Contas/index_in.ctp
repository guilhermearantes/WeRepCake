<h1>Relação de Contas</h1>
<table>
  <tr>
    <th>Código</th>
    <th>Nome</th>
    <th>Saldo</th>
    <th>Tipo</th>
    <th>Valor do Rateio</th>
  </tr>

  <?php foreach ($contas as $c): ?>
    <tr>
      <td>
        <?php echo $c['Conta']['id']; ?>
      </td>
      <td>
        <?php echo $this->Html->link($c['Conta']['nome'],
                array('controller' => 'contas',
                      'action' => 'view', $c['Conta']['id'])); ?>
      </td>
      <td>
        <?php echo $c['Conta']['saldo']; ?>
      </td>
         <td>
        <?php echo $c['Conta']['tipo']; ?>
      </td>
         <td>
        <?php echo $c['Conta']['valor_rateio']; ?>
      </td>
    </tr>
  <?php endforeach; ?>
</table>


