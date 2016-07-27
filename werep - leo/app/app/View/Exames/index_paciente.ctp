<h2 class="notice success">Relação de exames </h2>

<button class="notice success">
    <?php
        echo $this->Html->link("Solicitar novo exame",
        array('controller' => 'exames', 'action' => 'add_paciente'));
     ?>
</button>


<table>
    <tr>
        <th>Código</th>
        <th>Paciente</th>
        <th>Procedimento</th>
        <th>Data</th>
    </tr>
    <?php foreach ($exames as $e):?>
    <tr>
        <td>
            <?php echo $e['Exame']['id']; ?>
        </td>
        <td>
            <?php
            echo $this->Html->link($e['Paciente']['nome'],
                array('controller' => 'pacientes', 'action'=> 'view_paciente', $e['Exame']['paciente_id']));
            ?>
        </td>
        <td>
            <?php echo $this->Html->link($e['Procedimento']['nome'],
                array('controller' => 'procedimentos', 'action'=> 'view_paciente', $e['Exame']['procedimento_id']));
            ?>
        </td>
        <td>
            <?php echo $e['Exame']['data']?>
        </td>
        <td>
            <?php echo $this->Html->link('Editar', array('controller' => 'exames', 'action'=> 'edit_paciente', $e['Exame']['id'])); ?>
            <?php echo $this->Html->link('Excluir', array('controller' => 'exames', 'action'=> 'del_paciente', $e['Exame']['id']),array('confirm'=>'Deseja Excluir?')); ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<p>Valor total de todos exames: <?php echo $total_procedimento ?> R$</p>
<button class="actions">
    <?php
        echo $this->Html->link("Menu",array('controller' => 'menu','action' => 'index_paciente'));
     ?>
</button>
