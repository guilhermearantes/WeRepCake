<table class="table table-striped table-hover">
  <tr>
    <td>Código</td>
    <td>Nome Lançamento</td>
    <td>Nome Inquilino</td>
    <td>Data de Inserção</td>
    <td>Categoria</td>
    <td>Valor</td>
    <td>Imagem</td>
  </tr>
<?php foreach ($lancamentosInquilinos as $l): ?>
    <tr>
        <td>
            <?php echo $l['lancamentos']['id']; ?>
        </td>
        <td>
            <?php echo $this->Html->link($l['lancamentos']['nome'],
            array('controller' => 'lancamentos','action' => 'view', $l['lancamentos']['id'])); ?>
        </td>
        <td>
            <?php echo $this->Html->link($l['inquilinos']['nome'],
            array('controller' => 'inquilinos','action' => 'view_in', $l['inquilinos']['id'])); ?>
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
    </tr>
<?php endforeach; ?>
</table>
