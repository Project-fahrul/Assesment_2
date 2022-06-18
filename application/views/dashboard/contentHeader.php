<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="<?php echo $this->config->config['base_url'] ?>asset/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #3C8DBC;">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars" style="color: white;"></i></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto" style="display: flex; align-items: center;">

            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fas fa-envelope" style="color: white;"></i>
                    <span class="badge badge-success navbar-badge">3</span>
                </a>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell" style="color: white;"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-flag" style="color: white;"></i>
                    <span class="badge badge-danger navbar-badge">15</span>
                </a>
            </li>
            <li class="nav-item dropdown" style="display: flex; align-items: center; margin: 0 20px;">
                <div style="border: 1px solid black; width: 30px; overflow: hidden; height: 30px; border-radius: 100px; display: flex; align-items: center; justify-content: center;">
                <img src="<?php echo $this->config->config['base_url']."asset/foto/". $mhs->foto?>" alt="User Image" width="100%">
                </div>
                <p style="margin: 0; margin-left: 5px; color: white;"><?php echo $mhs->nama?></p>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="<?php echo $this->config->config['base_url'] ?>/dashboard" class="brand-link text-center" style="background-color: #357CA5;">
            <span class="font-weight-bold">AdminLTE</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 d-flex" style="align-items: center; border: none;">
                <div>
                    <img src="<?php echo $this->config->config['base_url']."asset/foto/". $mhs->foto?>" alt="User Image" width="100%">
                </div>
                <div class="info">
                    <a href="#" class="d-block"><?php echo $mhs->nama?></a>
                    <div style="color: white; font-size: 10px; display: flex; align-items: center;">
                        <div style="margin-right: 5px; display: inline-block; width: 10px; height: 10px; border-radius: 100px; background-color: green;"></div> Online
                    </div>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


                    <li class="nav-item">
                        <a href="<?php echo $this->config->config['base_url']."dashboard" ?>" class="nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo $this->config->config['base_url']."dashboard/user" ?>" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                User
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo $this->config->config['base_url']."dashboard/logout" ?>" class="nav-link">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>
                                Logout
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 d-inline"><?php if(isset($page_name)) echo $page_name;?></h1>
                        <span><?php if(isset($page_description)) echo $page_description;?></span>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $this->config->config['base_url']."dashboard" ?>"><i style="color: black;" class="fas fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active"><?php if(isset($page_name)) echo $page_name;?></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>