<h1>Inserir Dados sobre o novo lançamento</h1>
<?php
 echo $this->Form->create('Lancamento');
?>
<table>
    <tr><td>
        <h1>Nome do novo Lançamento:</h1>
        <?php echo $this->Form->input('nome');?>
    </td></tr>
    <tr><td>
        <h1>Data de entrada do lançamento:</h1>
        <?php echo $this->Form->input('data_entrada');?>
    </td></tr>
    <tr><td>
        <h1>Escreva uma categoria:</h1>
        <?php echo $this->Form->input('categoria');?>
    </td></tr>
    <tr><td>
        <h1>Valor R$:</h1>
        <?php echo $this->Form->input('valor');?>
    </td></tr>
    <tr><td>
        <h1>Imagem:</h1>
        <?php echo $this->Form->input('imagem');?>
    </td></tr>
    <tr><td>
        <h1>Conta relacionada:</h1>
        <?php echo $this->Form->select('conta_id', $contas, array('empty' => 'Selecione:'));?>
    </td></tr>
    <tr><td>
        <h1>Inquilino relacionado:</h1>
        <?php echo $this->Form->select('inquilino_id', $inquilinos, array('empty' => 'Selecione:'));?>
    </td></tr>
</table>
<?php
    echo $this->Form->end('Salvar');
 ?>
 <button class="actions">
     <?php echo $this->Html->link("Lancamentos",array('controller' => 'Lancamentos','action' => 'index'));?>
 </button>
