<h1>Inserir Dados sobre o novo lançamento</h1>
<?php
 echo $this->Form->create('Inquilino');
?>
<table>
    <tr><td>
        <h1>Nome:</h1>
        <?php echo $this->Form->input('nome');?>
    </td></tr>
    <tr><td>
        <?php echo $this->Form->input('apelido');?>
    </td></tr>
    <tr><td>
        <?php echo $this->Form->input('celular');?>
    </td></tr>
    <tr><td>
        <?php echo $this->Form->input('email');?>
    </td></tr>
    <tr><td>
        <b>Data Nascimento:</b>
        <?php echo $this->Form->date('data_nascimento');?>
    </td></tr>
    <tr><td>
        <?php echo $this->Form->input('naturalidade');?>
    </td></tr>
    <tr><td>
        <h1>Sexo:</h1>
        <?php echo $this->Form->select('sexo', $sexo, array('empty' => 'Selecione:'));?>
    </td></tr>
    <tr><td>
        <h1>Moradia:</h1>
        <?php echo $this->Form->select('moradia_id', $moradias, array('empty' => 'Selecione:'));?>
    </td></tr>
    <tr><td>
        <?php echo $this->Form->input('login');?>
    </td></tr>
    <tr><td>
        <b>Senha:</b>
        <?php echo $this->Form->password('senha');?>
    </td></tr>
</table>
<?php
    echo $this->Form->end('Salvar');
 ?>
 <button class="actions">
     <?php echo $this->Html->link("Voltar",array('action' => '../'));?>
 </button>
