<h2 class="notice success">Relação de exames por ordem decrescente de data</h2>
<table>
    <tr>
        <th>Código</th>
        <th>Paciente</th>
        <th>Procedimento</th>
        <th>Data (Char)</th>
    </tr>
    <?php foreach ($exames as $e):?>
    <tr>
        <td><?php echo $e['Exame']['id']; ?></td>
        <td><?php echo $this->Html->link($e['Paciente']['nome'],
                  array('controller' => 'pacientes', 'action'=> 'view_admin', $e['Exame']['paciente_id']));
        ?></td>
        <td><?php echo $this->Html->link($e['Procedimento']['nome'],
                  array('controller' => 'procedimentos', 'action'=> 'view_admin', $e['Exame']['procedimento_id']));
        ?></td>
        <td><?php echo $e['Exame']['data']?></td>
    </tr>
    <?php endforeach; ?>
</table>

<p>Valor total de todos exames: <?php echo $total_procedimento ?> R$</p>

<button class="actions">
    <?php
        echo $this->Html->link("Menu",array('controller' => 'menu','action' => 'index_admin'));
     ?>
</button>
