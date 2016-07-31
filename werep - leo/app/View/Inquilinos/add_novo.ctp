<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>Menu inquilino</title>
	<?php
		echo $this->Html->css('estilo.css');
		echo $this->Html->css('bootstrap.css');
	?>
</head>
<body>
	<div id="login">
        <h1>Inserir Dados sobre o novo lançamento</h1>
        <?php
         echo $this->Form->create('Inquilino');
        ?>
        <table>
            <tr>
                <h1>Nome:</h1>
                <?php echo $this->Form->input('nome');?>
            </tr>
            <tr>
                <?php echo $this->Form->input('apelido');?>
            </tr>
            <tr>
                <?php echo $this->Form->input('celular');?>
            </tr>
            <tr>
                <?php echo $this->Form->input('email');?>
            </tr>
            <tr>
                <b>Data Nascimento:</b>
                <?php echo $this->Form->date('data_nascimento');?>
            </tr>
            <tr>
                <?php echo $this->Form->input('naturalidade');?>
            </tr>
            <tr>
                <h1>Sexo:</h1>
                <?php echo $this->Form->select('sexo', $sexo, array('empty' => 'Selecione:'));?>
            </tr>
            <tr>
                <h1>Moradia:</h1>
                <?php echo $this->Form->select('moradia_id', $moradias, array('empty' => 'Selecione:'));?>
            </tr>
            <tr>
                <?php echo $this->Form->input('login');?>
            </tr>
            <tr>
                <b>Senha:</b>
                <?php echo $this->Form->password('senha');?>
            </tr>
        </table>
        <?php
            echo $this->Form->end('Salvar');
         ?>
         <button class="actions">
             <?php echo $this->Html->link("Voltar",array('action' => '../'));?>
         </button>
	</interface>
</body>
</html>
