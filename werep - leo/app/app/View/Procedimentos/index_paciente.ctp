<h2 class="notice success">Relação de procedimentos</h2>

<table>
    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Preço</th>
    </tr>

    <?php foreach ($procedimentos as $e):?>
    <tr>
        <td>
            <?php echo $e['Procedimento']['id']; ?>
        </td>
        <td>
            <?php echo $this->Html->link($e['Procedimento']['nome'],
                array('controller' => 'procedimentos', 'action'=> 'view_paciente', $e['Procedimento']['id']));
            ?>
        </td>
        <td>
            <?php echo $e['Procedimento']['preco']; ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<button class="actions">
    <?php
        echo $this->Html->link("Menu",array('controller' => 'menu','action' => 'index_paciente'));
    ?>
</button>
<button class="actions">
    <?php
        echo $this->Html->link("Sair do Sistema",
        array('controller' => 'pacientes', 'action' => 'logout'));
     ?>
</button>
