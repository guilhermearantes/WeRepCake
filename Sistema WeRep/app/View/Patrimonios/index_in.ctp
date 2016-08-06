<table class="table table-striped table-hover">
  <tr>
    <td>Código</td>
    <td>Nome</td>
    <td>Data de Entrada</td>
    <td>Data prevista para troca</td>
    <td>Valor do patrimônio</td>
  </tr>

  <?php foreach ($patrimonios as $p): ?>
    <tr>
      <td>
        <?php echo $p['patrimonios']['id']; ?>
      </td>
      <td>
        <?php echo $this->Html->link($p['patrimonios']['nome'],
        array('controller' => 'patrimonios','action' => 'view_in', $p['patrimonios']['id'])); ?>
      </td>
      <td>
        <?php echo $p['patrimonios']['data_entrada']; ?>
      </td>
         <td>
        <?php echo $p['patrimonios']['data_troca']; ?>
      </td>
         <td>
        <?php echo $p['patrimonios']['valor_patrimonio']; ?>
      </td>

    </tr>
  <?php endforeach; ?>
</table>
