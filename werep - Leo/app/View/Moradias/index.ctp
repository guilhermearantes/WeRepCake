<h1>Relação de Moradias</h1>
<table>
  <tr>
    <th>Código</th>
    <th>Nome</th>
    <th>Ano Fundação</th>
  </tr>

  <?php foreach ($moradias as $m): ?>
    <tr>
      <td>
        <?php echo $m['Moradia']['id']; ?>
      </td>
      <td>
        <?php echo $this->Html->link($m['Moradia']['nome'],
                array('controller' => 'moradias',
                      'action' => 'view', $m['Moradia']['id']));  ?>
      </td>
      <td>
        <?php echo $m['Moradia']['data_fundacao']; ?>
      </td>
    </tr>
  <?php endforeach; ?>
</table>




