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
                <div style="border: 1px solid black; width: 30px; height: 30px; border-radius: 100px; display: flex; align-items: center; justify-content: center;">
                    <p style="font-size: 11px; display: inline-block; margin: 0;">Foto</p>
                </div>
                <p style="margin: 0; margin-left: 5px; color: white;">Nama</p>
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
                    <img src="<?php echo $this->config->config['base_url'] ?>asset/dist/img/user2-160x160.jpg" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Nama</a>
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
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                User
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
                        <h1 class="m-0 d-inline">User</h1>
                        <span>Management</span>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $this->config->config['base_url'] ?>"><i style="color: black;" class="fas fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active">User</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo $this->config->config['base_url'] ?>asset/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo $this->config->config['base_url'] ?>asset/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo $this->config->config['base_url'] ?>asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo $this->config->config['base_url'] ?>asset/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo $this->config->config['base_url'] ?>asset/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo $this->config->config['base_url'] ?>asset/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo $this->config->config['base_url'] ?>asset/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo $this->config->config['base_url'] ?>asset/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo $this->config->config['base_url'] ?>asset/plugins/moment/moment.min.js"></script>
<script src="<?php echo $this->config->config['base_url'] ?>asset/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo $this->config->config['base_url'] ?>asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo $this->config->config['base_url'] ?>asset/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo $this->config->config['base_url'] ?>asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $this->config->config['base_url'] ?>asset/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo $this->config->config['base_url'] ?>asset/dist/js/pages/dashboard.js"></script>

<script>
    Array.from(document.querySelectorAll(".cus-btn-edit")).forEach((el) => {
        el.addEventListener('click', async (e) => {
            
            document.getElementById('modelTitle').textContent = "Edit User";
            document.getElementById('act').value = "edit"

            let userId = e.target.getAttribute('user-id')
            $('#exampleModal').modal('show')

            document.getElementById('inputUsername').value = ""
            document.getElementById('inputPassword').value = ""
            document.getElementById('inputName').value = ""
            document.getElementById('inputEmail').value = ""
            document.getElementById('inputLevel').value = ""
        })
    })

    document.getElementById('add-user').addEventListener('click', async (e) => {
            
        document.getElementById('modelTitle').textContent = "Add User";
            document.getElementById('act').value = "add"
            let userId = e.target.getAttribute('user-id')
            $('#exampleModal').modal('show')

            document.getElementById('inputUsername').value = ""
            document.getElementById('inputPassword').value = ""
            document.getElementById('inputName').value = ""
            document.getElementById('inputEmail').value = ""
            document.getElementById('inputLevel').value = ""
        })

    Array.from(document.getElementsByClassName('cus-btn-trash')).forEach( (el)=>{
        el.addEventListener('click', async(e)=>{
            if( confirm("Yakin Menghapus?") === true){
                let userId = e.target.getAttribute("user-id");
            }
        })
    })
</script>