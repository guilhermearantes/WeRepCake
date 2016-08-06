
<div class="login-box-body">
    <p class="login-box-msg">Para Atualizar seu perfil você deve excluir seus lançamentos</p>
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
        <?php echo $this->Form->input('naturalidade', array( 'class'=>'form-control','placeholder'=>'Cidade/Estado       -      EX: Belo Horizonte/MG','label'=>''));?>
    </div>
    <div class="form-group has-feedback">
        <?php echo $this->Form->radio('sexo',array('Masculino'=>'Masculino','Feminino'=>'Feminino'), array('legend'=>false));?>
    </div>
    <p class="login-box-msg">Definição de Usuário e Senha</p>
    <div class="form-group has-feedback">
        <?php echo $this->Form->login('login', array( 'class'=>'form-control','placeholder'=>'Usuário'));?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
        <?php echo $this->Form->password('senha',array('class'=>'form-control','placeholder'=>'Senha'));?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <?php
        echo $this->Form->end('Salvar');
     ?>
</div>
