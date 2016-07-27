<h1>Cadastro de Paciente </h1>
<?php
    echo $this->Form->create('Procedimento');
    echo $this->Form->input('nome');
    echo $this->Form->input('preco');
    echo $this->Form->end('Salvar');
 ?>

 <button class="actions">
     <?php echo $this->Html->link("Menu",array('controller' => 'menu','action' => 'index_admin'));?>
 </button>
