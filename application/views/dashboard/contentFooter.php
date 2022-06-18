
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
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    Array.from(document.querySelectorAll(".cus-btn-edit")).forEach((el) => {
        el.addEventListener('click', async (e) => {
            document.getElementById('modelTitle').textContent = "Edit User";
            document.getElementById('act').value = "edit"

            let userId = e.currentTarget.getAttribute('user-id')
            $('#exampleModal').modal('show')

            let response;            
            try {
                response = await axios.get("<?php echo $this->config->config['base_url'] ?>"+"dashboard/get/"+userId);
            } catch (error) {
                console.log(error);
            }
            document.getElementById('target_id').value = userId;
            document.getElementById('inputUsername').value = response.data.usernama
            document.getElementById('inputPassword').value = response.data.password
            document.getElementById('inputName').value = response.data.name
            document.getElementById('inputEmail').value = response.data.email
            document.getElementById('inputLevel').value = response.data.level
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
                let userId = e.currentTarget.getAttribute("user-id");
                window.location.href = "<?php echo $this->config->config['base_url'] ?>"+"dashboard/delete/"+userId
            }
        })
    })
</script>