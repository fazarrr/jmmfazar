<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?php echo base_url() ?>" class="nav-link">Home</a>
                </li>
                <!-- <li class="nav-item d-none d-sm-inline-block">
                    <a href=" -->
                <?php
                // echo base_url()
                ?>
                <!-- " class="nav-link">Contact</a>
                </li> -->
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li> -->
                <a href="<?php echo base_url('logout') ?>">
                    <button type="button" class="btn btn-danger">LOGOUT</button>
                </a>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?php echo base_url() ?>" class="brand-link">
                <img src="<?php echo base_url() ?>/assets/AdminLTE/dist/img/jjm.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Jaring Mitra Mandiri</span>
            </a>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user-alt"></i>
                            <p>
                                User
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo base_url() ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View Customer</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url('home/alldetail') ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View Detail Customer</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url('home/create') ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Data</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-cart-plus"></i>
                            <p>
                                Product Stock
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{asset('assets/AdminLTE')}}/index.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dashboard v1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{asset('assets/AdminLTE')}}/index2.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dashboard v2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{asset('assets/AdminLTE')}}/index3.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dashboard v3</p>
                                </a>
                            </li>
                        </ul>
                    </li> -->
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </aside>