<h2 class="notice success">Relação de procedimentos</h2>

<span class="notice success">
    <?php
        echo $this->Html->link("Adicionar novo procedimento",
        array('controller' => 'procedimentos', 'action' => 'add_admin'));
     ?>
</span>

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
                array('controller' => 'procedimentos', 'action'=> 'view_admin', $e['Procedimento']['id']));
            ?>
        </td>
        <td>
            <?php echo $e['Procedimento']['preco']; ?>
        </td>
        <td>
            <?php echo $this->Html->link('Editar', array('controller' => 'procedimentos', 'action'=> 'edit_admin', $e['Procedimento']['id'])); ?>
            <?php echo $this->Html->link('Excluir', array('controller' => 'procedimentos', 'action'=> 'del_admin', $e['Procedimento']['id']),array('confirm'=>'Deseja Excluir?')); ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<button class="actions">
    <?php
        echo $this->Html->link("Menu",array('controller' => 'menu','action' => 'index_admin'));
    ?>
</button>
