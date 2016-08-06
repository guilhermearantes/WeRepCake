<?php
  echo $this->Form->create('Patrimonio');
?>
      <?php //echo $this->Form->hidden('moradia_id', ['value' => $usuario['0']['Paciente']['id']]); ?>
<table class="table table-striped">
     <tr><td>Nome:</td><td>
        <?php echo $this->Form->input('nome',array('label'=>''));?>
    </td></tr>
    <tr><td>Data em que foi comprado:</td><td>
        <?php echo $this->Form->input('data_entrada',array('label'=>''));?>
    </td></tr>
    <tr><td>Data de troca:</td><td>
        <?php echo $this->Form->input('data_troca',array('label'=>''));?>
    </td></tr>
     <tr><td>Valor do patrimônio:</td><td>
        <?php echo $this->Form->input('valor_patrimonio',array('label'=>''));?>
    </td></tr>
  </table>
<?php
    echo $this->Form->end('Salvar');
 ?>
