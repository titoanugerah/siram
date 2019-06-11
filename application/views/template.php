<?php if (!$this->session->userdata['login']) {redirect(base_url('login'));}?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/dist/img/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> SIRAM | <?php echo ucfirst($this->session->userdata['previlleges']); ?> </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css'); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/_all-skins.min.css'); ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.css'); ?>">
  <!-- Skins -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/_all-skins.min.css'); ?>">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2/select2.min.css') ?>">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/highcharts-more.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>

</head>
<body class="hold-transition skin-green sidebar-mini">
  <!--disini-->
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>S</b>R</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>SI</b>RAM</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?php echo base_url('./assets/dist/img/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?php echo $this->session->userdata['fullname']; ?></p>
            <p>@<?php echo $this->session->userdata['username']; ?></p>
            <br>

          </div>
        </div>
        <!-- search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?php $this->load->view($this->session->userdata['previlleges'].'/menu');?>
      </section>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->


      <!-- Main content -->
      <section class="content">
        <!-- Small boxes (Stat box) -->

        <!-- /.row -->
        <?php $this->load->view('notification/'.$content['notification']); ?>
        <?php $this->load->view($this->session->userdata['previlleges'].'/'.$content['view_name']); ?>

        <!-- Main row -->

        <!-- /.row (main row) -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.0.0
      </div>
      <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="http://siskom.undip.ac.id/">Teknik Komputer UNDIP</a>.</strong> All rights
      reserved.
    </footer>

    <!-- Control Sidebar -->

  </div>
  <!-- ./wrapper -->

  <!-- jQuery 2.2.3 -->
  <script src="<?php echo base_url('assets/plugins/jQuery/jquery-2.2.3.min.js'); ?>"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
  <!-- Select2 -->
  <script src="<?php echo base_url('assets/plugins/select2/select2.full.min.js'); ?>"></script>
  <!-- SlimScroll -->
  <script src="<?php echo base_url('assets/plugins/slimScroll/jquery.slimscroll.min.js'); ?>"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url('assets/plugins/fastclick/fastclick.js'); ?>" ></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url('assets/dist/js/app.min.js'); ?>"></script>
  <!-- DataTables -->
  <script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.min.js'); ?>"></script>


  <script>
    $(function () {

        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true
        });

    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('.js-example-basic-single').select2();
    });
  </script>


</body>
</html>
