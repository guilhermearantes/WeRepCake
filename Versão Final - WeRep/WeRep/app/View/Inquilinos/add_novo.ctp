 <div class="login-box">
    <div class="login-logo">
        <b>Cadastro WeRep</b>
    </div>
    <div class="login-box-body">
        <p class="login-box-msg">Insira seus dados</p>
        <?php echo $this->Form->create('Inquilino');?>
        <div class="form-group has-feedback">
            <?php echo $this->Form->input('nome', array( 'class'=>'form-control','placeholder'=>'Nome','label'=>''));?>
        </div>
        <div class="form-group has-feedback">
            <?php echo $this->Form->input('apelido', array( 'class'=>'form-control','placeholder'=>'Apelido','label'=>''));?>
        </div>
        <div class="form-group has-feedback">
            <?php echo $this->Form->input('celular', array( 'class'=>'form-control','placeholder'=>'Celular','label'=>''));?>
        </div>
        <div class="form-group has-feedback">
            <?php echo $this->Form->email('email', array( 'class'=>'form-control','placeholder'=>'E-mail','label'=>''));?>
        </div>
        <div class="form-group has-feedback">
            <?php echo $this->Form->date('data_nascimento', array( 'class'=>'form-control','placeholder'=>'Data de Nascimento','label'=>''));?>
        </div>
        <div class="form-group has-feedback">
            <?php echo $this->Form->input('naturalidade', array( 'class'=>'form-control','placeholder'=>'Naturalidade','label'=>''));?>
        </div>
        <div class="form-group has-feedback">
            <?php echo $this->Form->radio('sexo',array('Masculino'=>'Masculino','Feminino'=>'Feminino'), array('legend'=>false));?>
        </div>
        <div class="form-group has-feedback">
            <?php echo $this->Form->select('moradia_id', $moradias, array('empty' => 'Selecione:'));?>
        </div>
        <div class="form-group has-feedback">
            <?php echo $this->Form->login('login', array( 'class'=>'form-control','placeholder'=>'Usuário'));?>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <?php echo $this->Form->password('senha',array('class'=>'form-control','placeholder'=>'Senha'));?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <!--table>
            <tr><td>Nome:</td><td>
                <?php #echo $this->Form->input('nome',array('label'=>''));?>
            </td></tr>
            <tr><td>Apelido:</td><td>
                <?php #echo $this->Form->input('apelido',array('label'=>''));?>
            </td></tr>
            <tr><td>Celular:</td><td>
                <?php #echo $this->Form->input('celular',array('label'=>''));?>
            </td></tr>
            <tr><td>E-mail:</td><td>
                <?php #echo $this->Form->email('email',array('label'=>''));?>
            </td></tr>
            <tr><td>Data Nascimento:</td><td>
                <?php #echo $this->Form->date('data_nascimento',array('label'=>''));?>
            </td></tr>
            <tr><td>Naturalidade:</td><td>
                <?php #echo $this->Form->input('naturalidade',array('label'=>''));?>
            </td></tr>
            <tr><td>Sexo:</td><td>
                <?php
                #echo $this->Form->radio('sexo',array('Masculino'=>'Masculino','Feminino'=>'Feminino'), array('legend'=>false));
             #echo $this->Form->select('sexo', array(['Masculino','Feminino']), array('empty' => 'Selecione:','label'=>''));
                ?>
            </td></tr>
            <tr><td>Moradia:</td><td>
                <?php #echo $this->Form->select('moradia_id', $moradias, array('empty' => 'Selecione:'));?>
            </td></tr>
            <tr><td>Defina seu Login:</td><td>
                <?php #echo $this->Form->input('login', array('label'=>''));?>
            </td></tr>
            <tr><td>Defina sua senha:</td><td>
                <?php #echo $this->Form->password('senha', array('label'=>''));?>
            </td></tr>
        </table-->

        <?php
            echo $this->Form->end('Salvar');
         ?>
    </div>
  </div>
