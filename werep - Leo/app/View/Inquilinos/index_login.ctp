<h1> Acesso ao Sistema </h1>

<?php

    echo $this->Form->create('Inquilino', array('controller' => 'inquilinos', 'url' => 'login'));


    echo $this->Form->input('login', array('label' => 'Nome do usuário:'));

    echo '<label> Senha:</label>';

    echo $this->Form->password('senha');

    echo $this->Form->end('Acessar');

?>