<h1>Relação de Moradias</h1>
<table>
  <tr>
    <th>Nome</th>
    <th>Cidade</th>
    <th>Estado</th>
    <th>Bairro</th>
    <th>Rua</th>
    <th>Numero</th>
    <th>Telefone</th>
    <th>Data de Fundacao</th>
  </tr>

  <?php foreach ($moradias as $m): ?>
    <tr>
      <td>
        <?php echo $this->Html->link($m['Moradia']['nome'],
                array('controller' => 'moradias',
                      'action' => 'view', $m['Moradia']['id']));  ?>
      </td>
      <td>
        <?php echo $m['Moradia']['cidade']; ?>
      </td>
      <td>
        <?php echo $m['Moradia']['estado']; ?>
      </td>
      <td>
        <?php echo $m['Moradia']['bairro']; ?>
      </td>
      <td>
        <?php echo $m['Moradia']['rua']; ?>
      </td>
      <td>
        <?php echo $m['Moradia']['numero']; ?>
      </td>
      <td>
        <?php echo $m['Moradia']['telefone']; ?>
      </td>
      <td>
        <?php echo $m['Moradia']['data_fundacao']; ?>
      </td>
    </tr>
  <?php endforeach; ?>
</table>
