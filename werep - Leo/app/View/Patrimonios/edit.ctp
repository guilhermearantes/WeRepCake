
<h1>Editar Patrimônio</h1>


<?php 

echo $this->Form->create('Patrimonio');

echo $this->Form->input('id');

echo $this->Form->input('nome');

echo $this->Form->input('data_entrada');

echo $this->Form->input('depreciacao');

echo $this->Form->input('manutencao');

echo $this->Form->end('Salvar');
?>
