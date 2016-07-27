<h2 class="notice success">Relação de Pacientes</h2>
<table>
    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Login</th>
    </tr>

    <?php foreach ($pacientes as $e):?>
    <tr>
        <td>
            <?php echo $e['Paciente']['id']; ?>
        </td>
        <td>
            <?php echo $this->Html->link($e['Paciente']['nome'],
                array('controller' => 'pacientes', 'action'=> 'view_admin', $e['Paciente']['id']));
            ?>
        </td>
        <td>
            <?php echo $e['Paciente']['login']; ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<button class="actions">
    <?php
        echo $this->Html->link("Menu",array('controller' => 'menu','action' => 'index_admin'));
    ?>
</button>
<button class="actions">
    <?php
        echo $this->Html->link("Exames",array('controller' => 'exames','action' => 'index_admin'));
     ?>
</button>
