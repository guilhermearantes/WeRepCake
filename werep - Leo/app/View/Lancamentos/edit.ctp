<h1>Inserir Dados sobre o novo lançamento</h1>
<?php
 echo $this->Form->create('Lancamento');
?>
<table>
    <tr><td>
        <?php echo $this->Form->input('nome');?>
    </td></tr>
    <tr><td>
        <?php echo $this->Form->input('data_entrada');?>
    </td></tr>
    <tr><td>
        <?php echo $this->Form->input('categoria');?>
    </td></tr>
    <tr><td>
        <?php echo $this->Form->input('valor');?>
    </td></tr>
    <tr><td>
        <?php echo $this->Form->input('imagem');?>
    </td></tr>
    <tr><td>
        <h1>Conta relacionada:</h1>
        <?php echo $this->Form->select('conta_id', $contas, array('empty' => 'Selecione:'));?>
    </td></tr>
</table>
<?php
    echo $this->Form->end('Salvar');
 ?>
 <button class="actions">
 <?php echo $this->Html->link("Todos Lancamentos",array('controller' => 'Lancamentos','action' => 'index_in'));?>
 </button>
 <button class="actions">
 <?php echo $this->Html->link("Meus Lançamentos",array('controller' => 'Lancamentos','action' => 'index_inquilino'));?>
 </button>
