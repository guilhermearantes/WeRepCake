<h1>Relação de Lançamentos</h1>
<table>
  <tr>
    <th>Código</th>
    <th>Nome</th>
    <th>Data de Inserção</th>
    <th>Categoria</th>
    <th>Valor</th>
  </tr>

  <?php foreach ($lancamentos as $l): ?>
    <tr>
      <td>
        <?php echo $l['Lancamento']['id']; ?>
      </td>
      <td>
        <?php echo $this->Html->link($l['Lancamento']['nome'],
                array('controller' => 'lancamentos',
                      'action' => 'view', $l['Lancamento']['id'])); ?>
      </td>
      <td>
        <?php echo $l['Lancamento']['data_insercao']; ?>
      </td>
         <td>
        <?php echo $l['Lancamento']['categoria']; ?>
      </td>
         <td>
        <?php echo $l['Lancamento']['valor']; ?>
      </td>
    </tr>
  <?php endforeach; ?>
</table>


