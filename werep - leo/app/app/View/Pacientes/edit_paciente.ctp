<h1>Edição de Paciente </h1>
<?php
    echo $this->Form->create('Paciente');
    echo $this->Form->input('nome');
    echo $this->Form->input('login');
    echo $this->Form->input('senha');
    echo $this->Form->end('Salvar');
 ?>
 <button class="actions">
     <?php echo $this->Html->link("Menu",array('controller' => 'menu','action' => 'index_paciente'));?>
 </button>
