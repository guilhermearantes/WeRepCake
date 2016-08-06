<?php
 echo $this->Form->create('Lancamento');
?>
<table class="table table-striped">
    <tr><td>Nome:</td><td>
        <?php echo $this->Form->input('nome',array('label'=>''));?>
    </td></tr>
    <tr><td>Data Entrada:</td><td>
        <?php echo $this->Form->input('data_entrada',array('label'=>''));?>
    </td></tr>
    <tr><td>Categoria:</td><td>
        <?php echo $this->Form->input('categoria',array('label'=>''));?>
    </td></tr>
    <tr><td>Valor:</td><td>
        <?php echo $this->Form->input('valor',array('label'=>''));?>
    </td></tr>
    <tr><td>Imagem:</td><td>
        <?php echo $this->Form->input('imagem',array('label'=>''));?>
    </td></tr>

</table>
<?php
    echo $this->Form->end('Salvar');
 ?>
