<div class="login-box">
    <div class="login-logo">
        <b>We</b>Rep
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Faça login para começar a sessão</p>
        <?php  echo $this->Form->create('Inquilino', array('url' => 'login')); ?>
        <!--form action="   " method="post"-->
        <div class="form-group has-feedback">
            <?php echo $this->Form->login('login', array( 'class'=>'form-control','placeholder'=>'Usuário'));?>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <?php echo $this->Form->password('senha',array('class'=>'form-control','placeholder'=>'Senha'));?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="wrapper" style="left:95px;">
            <table>
                <td>
                <?php echo $this->Form->end('Login');?>
            </td><td>
                <button type="button" name="button">
                    <?php echo $this->Html->link('Cadastre-se',array('controller'=>'inquilinos','action' => 'add_novo'));?>
                </button>
            </td>
            </table>
        </div>
    </div>
</div>
