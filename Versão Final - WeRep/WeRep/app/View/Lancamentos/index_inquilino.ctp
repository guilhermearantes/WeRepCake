<table  class="table table-striped">
  <tr>
    <td><p>Código</p></td>
    <td>Nome Lançamento</td>
    <td>Data de Inserção</td>
    <td>Categoria</td>
    <td>Valor</td>
    <td>Imagem</td>
    <td>Editar</td>
    <td>Excluir</td>
  </tr>
  <?php foreach ($lancamentosInquilino as $l): ?>
    <tr>
        <td>
            <?php echo $l['lancamentos']['id']; ?>
        </td>
        <td>
            <?php echo $this->Html->link($l['lancamentos']['nome'],
            array('controller' => 'lancamentos','action' => 'view_in', $l['lancamentos']['id'])); ?>
        </td>
        <td>
            <?php echo $l['lancamentos']['data_entrada']; ?>
        </td>
        <td>
            <?php echo $l['lancamentos']['categoria']; ?>
        </td>
        <td>
            <?php echo $l['lancamentos']['valor']; ?> R$
        </td>
        <td>
            <?php echo base64_decode($l['lancamentos']['imagem']); ?>
        </td>
        <td>
            <?php echo $this->Html->link('Editar', array('controller' => 'lancamentos', 'action'=> 'edit', $l['lancamentos']['id'])); ?>
        </td>
        <td>
            <?php echo $this->Html->link('Excluir', array('controller' => 'lancamentos', 'action'=> 'del', $l['lancamentos']['id']),array('confirm'=>'Deseja Excluir?')); ?>
        </td>
    </tr>
  <?php endforeach; ?>
</table>
