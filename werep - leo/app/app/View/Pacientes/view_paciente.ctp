<h2 class="notice success">Dados do paciente</h2>

<p>Código: <?php echo $paciente['Paciente']['id']?></p>
<p>Nome: <?php echo $paciente['Paciente']['nome']?></p>
<p>Login: <?php echo $paciente['Paciente']['login']?></p>
<p>Senha: <?php echo $paciente['Paciente']['senha']?></p>

<button><?php echo $this->Html->link('Editar', array('controller' => 'pacientes', 'action'=> 'edit_paciente', $paciente['Paciente']['id'])); ?></button>

<button><?php echo $this->Html->link('Excluir', array('controller' => 'pacientes', 'action'=> 'del_paciente', $paciente['Paciente']['id']),array('confirm'=>'Deseja Cancelar sua conta?')); ?></button>


<button class="actions">
    <?php
        echo $this->Html->link("voltar",array('controller' => 'menu','action' => 'index_paciente'));
     ?>
</button>
