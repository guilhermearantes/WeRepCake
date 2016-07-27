<h1>Relação de Patrimônios</h1>
<table>
  <tr>
    <th>Código</th>
    <th>Nome</th>
    <th>Data de Entrada</th>
    <th>Depreciação</th>
    <th>Manutenção</th>
  </tr>

  <?php foreach ($patrimonios as $p): ?>
    <tr>
      <td>
        <?php echo $p['Patrimonio']['id']; ?>
      </td>
      <td>
        <?php echo $this->Html->link($p['Patrimonio']['nome'],
                array('controller' => 'patrimonios',
                      'action' => 'view', $p['Patrimonio']['id'])); ?>
      </td>
      <td>
        <?php echo $p['Patrimonio']['data_entrada']; ?>
      </td>
         <td>
        <?php echo $p['Patrimonio']['depreciacao']; ?>
      </td>
         <td>
        <?php echo $p['Patrimonio']['manutencao']; ?>
      </td>
    </tr>
  <?php endforeach; ?>
</table>


