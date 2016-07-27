<h2 class="notice success">Dados do procedimento</h2>

<p>Código: <?php echo $procedimento['Procedimento']['id']?></p>
<p>Nome: <?php echo $procedimento['Procedimento']['nome']?></p>
<p>Preço: <?php echo $procedimento['Procedimento']['preco']?></p>

<button class="actions">
    <?php
        echo $this->Html->link("Menu",array('controller' => 'menu','action' => 'index_admin'));
    ?>
</button>
<button class="actions">
    <?php
        echo $this->Html->link("voltar",array('controller' => 'procedimentos','action' => 'index_admin'));
     ?>
</button>
