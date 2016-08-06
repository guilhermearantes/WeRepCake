<table class="table table-striped table-hover">
  <tr>
    <td>Nome</td>
    <td>Apelido</td>
    <td>Celular</td>
    <td>Email</td>
    <td>Data de Nascimento</td>
    <td>Naturalidade</td>
    <td>Sexo</td>
  </tr>

  <?php foreach ($inquilinos as $i): ?>
    <tr>
      <td>
        <?php echo $this->Html->link($i['inquilinos']['nome'],array('controller' => 'inquilinos',
            'action' => 'view', $i['inquilinos']['id']));  ?>
      </td>
      <td>
        <?php echo $i['inquilinos']['apelido']; ?>
      </td>
      <td>
        <?php echo $i['inquilinos']['celular']; ?>
      </td>
      <td>
        <?php echo $i['inquilinos']['email']; ?>
      </td>
      <td>
        <?php echo $i['inquilinos']['data_nascimento']; ?>
      </td>
      <td>
        <?php echo $i['inquilinos']['naturalidade']; ?>
      </td>
      <td>
        <?php echo $i['inquilinos']['sexo']; ?>
      </td>
    </tr>
  <?php endforeach; ?>
</table>
