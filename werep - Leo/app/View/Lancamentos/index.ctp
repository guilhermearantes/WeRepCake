<h1>Relação de Lançamentos</h1>
<button>
    <?php
        echo $this->Html->link("Adicionar novo Lançamento",
        array('controller' => 'lancamentos', 'action' => 'add'));
     ?>
</button>
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
                array('controller' => 'lancamentos','action' => 'view', $l['Lancamento']['id'])); ?>
      </td>
      <td>
        <?php echo $l['Lancamento']['data_entrada']; ?>
      </td>
         <td>
        <?php echo $l['Lancamento']['categoria']; ?>
      </td>
         <td>
        <?php echo $l['Lancamento']['valor']; ?>
      </td>
      </td>
         <td>
        <?php echo $l['Lancamento']['imagem']; ?>
        <?php #echo '<img src="'.$l['Lancamento']['imagem'].'"/>'; ?>
        </td>
        <td>
            <?php echo $this->Html->link('Editar', array('controller' => 'lancamentos', 'action'=> 'edit', $l['Lancamento']['id'])); ?>
            <?php echo $this->Html->link('Excluir', array('controller' => 'lancamentos', 'action'=> 'del', $l['Lancamento']['id']),array('confirm'=>'Deseja Excluir?')); ?>
        </td>
    </tr>
  <?php endforeach; ?>
</table>
