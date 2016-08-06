
<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bar-chart-o"></i>
                    <span>Contas</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><!--i class="fa fa-angle-double-right"></i-->
                        <?= $this->Html->link('Listar Contas'
                        ,array('controller'=>'contas', 'action'=>'index_in')); ?>
                    </li><li>
                        <?= $this->Html->link('Divisão de contas'
                        ,array('controller'=>'contas', 'action'=>'index_rateio')); ?>
                    </li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bar-chart-o"></i>
                    <span>Gestão de Lançamentos</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><!--i class="fa fa-angle-double-right"></i-->
                        <?= $this->Html->link('Inserir'
                        ,array('controller'=>'lancamentos', 'action'=>'add')); ?>
                    </li><li>
                        <?= $this->Html->link('Todos Lançamentos'
                        ,array('controller'=>'lancamentos', 'action'=>'index_in')); ?>
                    </li><li>
                        <?= $this->Html->link('Meus Lançamentos'
                        ,array('controller'=>'lancamentos', 'action'=>'index_inquilino')); ?>
                    </li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bar-chart-o"></i>
                    <span>Dados sobre Moradia</span></span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <?= $this->Html->link('Minha Moradia'
                        ,array('controller'=>'moradias', 'action'=>'view_in')); ?>
                    </li>
                    <li>
                        <?= $this->Html->link('Listar todas Moradias'
                        ,array('controller'=>'moradias', 'action'=>'index')); ?>
                    </li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bar-chart-o"></i>
                    <span>Gestão de Inquilinos</span></span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <?= $this->Html->link('Listar'
                        ,array('controller'=>'inquilinos', 'action'=>'index_in')); ?>
                    </li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bar-chart-o"></i>
                    <span>Gestão de Patrimônios</span></span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <?= $this->Html->link('Inserir'
                        ,array('controller'=>'patrimonios', 'action'=>'add')); ?>
                    </li>
                    <li>
                        <?= $this->Html->link('Listar'
                        ,array('controller'=>'patrimonios', 'action'=>'index_in')); ?>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
