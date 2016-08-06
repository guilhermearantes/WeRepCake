<!-- header logo: style can be found in header.less -->
<header class="header">
    <a class="logo">
        <!-- Add the class icon to your logo image or logo icon to add the margining -->
        WeRep
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <?php $sessao = $this->Session->read('Inquilino');?>
                    <a href='#' class="dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i>
                        <span> <?php echo $sessao['0']['Inquilino']['nome']; ?>
                        <i class="caret"></i></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header bg-light-black">
                             <?= $this->Html->image('avatar04.png', array('class' => 'img-circle')); ?>
                            <p>
                                <?php echo $sessao['0']['Inquilino']['apelido']; ?> -
                                <?php echo $sessao['0']['Moradia']['nome']; ?>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <button style="background-color: #696969;">
                                    <?php echo $this->Html->link('Minha Conta',array('controller' => 'inquilinos','action' => 'view_in', $sessao['0']['Inquilino']['id'])); ?>
                                </button>
                            </div>
                            <div class="pull-right">
                                <button style="background-color: #696969;">
                                    <?php echo $this->Html->link('Logout',array('controller' => 'inquilinos','action' => 'Logout')); ?>
                                </button>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
