<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
              <span class="glyphicon glyphicon-user cor" style="color:#20B2AA;"></span>
            </div>
            <div class="pull-left info">
              @if(Auth::check())
                <p>{{ Auth::user()->name }}</p>

                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <!-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
<span class="input-group-btn">
  <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
</span>
            </div>
        </form> -->
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="/cliente/{{ Auth::user()->id }}"><span>Produtos Adquiridos </span></a></li>
            <!-- <li><a href="../user/{{ Auth::user()->id }}"><span>Editar Dados Pessoais</span></a></li>
            <li><a href="/showcart"><span>Carrinho</span></a></li> -->

            <!-- <li class="treeview">
                <a href="#"><span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Link in level 2</a></li>
                    <li><a href="#">Link in level 2</a></li>
                </ul>
            </li> -->
        </ul><!-- /.sidebar-menu -->
        @endif
    </section>
    <!-- /.sidebar -->
</aside>
