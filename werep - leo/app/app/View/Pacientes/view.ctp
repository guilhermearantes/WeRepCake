<h2 class="notice success">Dados do paciente</h2>

<p>Código: <?php echo $paciente['Paciente']['id']?></p>
<p>Nome: <?php echo $paciente['Paciente']['nome']?></p>
<p>Login: <?php echo $paciente['Paciente']['login']?></p>

<button class="actions">
    <?php
        echo $this->Html->link("voltar",array('controller' => 'pacientes','action' => 'index'));
     ?>
</button>
