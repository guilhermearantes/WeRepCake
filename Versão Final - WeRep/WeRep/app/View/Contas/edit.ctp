<?php
 echo $this->Form->create('Conta');
?>
<table class="table table-striped">
    <tr><td>Valor R$:</td><td>
        <?php echo $this->Form->input('saldo',array('label'=>''));?>
    </td>
</table>
<?php
    echo $this->Form->end('Salvar');
 ?>
