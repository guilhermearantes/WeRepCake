<h2 class="notice success">Editar Exame </h2>
<?php
 echo $this->Form->create('Exame');
?>
<table>
<tr>
<td>
    <h1>Selecione o procedimento:</h1>
</td>
<td>
<?php
     echo $this->Form->select('procedimento_id', $procedimentos, array('empty' => 'Selecione:'));
?>
</td>
</tr>
<tr>
<td>
<?php
     echo $this->Form->input('data', $procedimentos, array('empty' => 'Selecione:'));
?>
</td>
</tr>
</table>
<?php
    echo $this->Form->end('Salvar');
 ?>
 <button class="actions">
     <?php echo $this->Html->link("Menu",array('controller' => 'menu','action' => 'index_paciente'));?>
 </button>
