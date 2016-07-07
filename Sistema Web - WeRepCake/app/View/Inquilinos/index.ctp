<h1>Relação de Moradores</h1>
<table>
  <tr>
    <th>Código</th>
    <th>Nome</th>
    <th>Apelido</th>
    <th>Celular</th>
    <th>Email</th>
    <th>Data de Nascimento</th>
    <th>Naturalidade</th>
    <th>Sexo</th>
  </tr>

  <?php foreach ($inquilinos as $i): ?>
    <tr>
     
     
      <td>
        <?php echo $i['Inquilino']['id']; ?>
      </td>
      
      <td>
        <?php echo $this->Html->link($i['Inquilino']['nome'],
                array('controller' => 'inquilinos',
                      'action' => 'view', $i['Inquilino']['id']));  ?>
      </td>
      
      <td>
        <?php echo $i['Inquilino']['apelido']; ?>
      </td>
      
      <td>
        <?php echo $i['Inquilino']['celular']; ?>
      </td>

      <td>
        <?php echo $i['Inquilino']['email']; ?>
      </td>                        
            
      <td>
        <?php echo $i['Inquilino']['data_nascimento']; ?>
      </td>
      
      <td>
        <?php echo $i['Inquilino']['naturalidade']; ?>
      </td>      
      
      <td>
        <?php echo $i['Inquilino']['sexo']; ?>
      </td>
      
    </tr>
  <?php endforeach; ?>
</table>


