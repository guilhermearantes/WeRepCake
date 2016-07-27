<h1>Dados da Moradia:</h1>
<table>
<p>Código:
<?php echo $moradia['id']; ?>
</p>
<p>Nome:
<?php echo $moradia['nome'];  ?>
</p>
<p>Cidade:
<?php echo $moradia['cidade']; ?>
</p>
<p>Estado:
<?php echo $moradia['estado']; ?>
</p>
<p>Bairro:
<?php echo $moradia['bairro']; ?>
</p>
<p>Rua:
<?php echo $moradia['rua']; ?>
</p>
<p>Número:
<?php echo $moradia['numero']; ?>
</p>
<p>Complemento:
<?php echo $moradia['complemento']; ?>
</p>
<p>Telefone:
<?php echo $moradia['telefone']; ?>
</p>
<p>Data de Fundação:
<?php echo $moradia['data_fundacao']; ?>
</p>
<p>E-mail:
<?php echo $moradia['email']; ?>
</p>
</table>

<?php echo $this->Html->link("Voltar",array('controller' => 'menu','action' => 'index_in'));?>
