<table class="table table-striped table-hover">
  <tr>
    <td>Nome</td>
    <td>Cidade</td>
    <td>Estado</td>
    <td>Bairro</td>
    <td>Rua</td>
    <td>Numero</td>
    <td>Telefone</td>
    <td>Data de Fundacao</td>
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
