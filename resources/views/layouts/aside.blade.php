<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('admin/departamento') }}" class="brand-link elevation-4">
        <span class="logo-mini"><strong class="titulo-show">P</strong></span>
        <span class="brand-text font-weight-light"><strong>PROSIGEM S.A.S.</strong> </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Intituciones
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/departamento') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Departamentos</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/municipio') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Municipios</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/servicio') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Servicios</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/empresa') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Empresas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/actEco') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Act. Economicas</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Important</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-warning"></i>
                        <p>Warning</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Informational</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
