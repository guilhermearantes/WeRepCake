<h1>Inserir Dados sobre o nova Moradia</h1>
<?php echo $this->Form->create('Moradia');?>
<table>
<p><?php echo $this->Form->input('nome');  ?></p>
<p><?php echo $this->Form->input('cidade'); ?></p>
<p><?php echo $this->Form->input('estado'); ?></p>
<p><?php echo $this->Form->input('bairro'); ?></p>
<p><?php echo $this->Form->input('rua'); ?></p>
<p><?php echo $this->Form->input('numero'); ?></p>
<p><?php echo $this->Form->input('complemento'); ?></p>
<p><?php echo $this->Form->input('telefone'); ?></p>
<p>Data de Fundação:
<?php echo $this->Form->date('data_fundacao'); ?>
</p>
<p>E-mail:
<?php echo $this->Form->email('email'); ?>
</p>
</table>

<?php echo $this->Form->end('Salvar');?>

 <button class="actions">
     <?php echo $this->Html->link("Moradias",array('controller' => 'Moradia','action' => 'index'));?>
 </button>
