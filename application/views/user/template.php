<?php
//var_dump(!$this->session->userdata['login']);die;
  if ((!$this->session->userdata['login']) || ($this->session->userdata['previlleges']!='user')) {
  redirect(base_url('userLogin'));
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/dist/img/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> SIRAM - USER </title>
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
   <!-- <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/dist/css/skins/_all-skins.min.css'); ?>"> -->



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
          <!-- Messages: style can be found in dropdown.less-->

          <!-- Notifications: style can be found in dropdown.less -->

          <!-- Tasks: style can be found in dropdown.less -->

          <!-- User Account: style can be found in dropdown.less -->

          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
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
          <p>Welcome <?php echo $this->session->userdata['fullname']; ?></p>
          <p>@<?php echo $this->session->userdata['username']; ?></p>
          <br>

        </div>
      </div>
      <!-- search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Beranda</li>
      <li>
          <a href="<?php echo base_url('userHome'); ?>">
            <i class="fa fa-h-square"></i> <span>Halaman Utama</span>
          </a>
        </li>
      </ul>
      <ul class="sidebar-menu">
        <li class="header">Node</li>
          <?php foreach ($node as $item) : ?>
        <li class="treeview">
          <a href="#">
            <i class="fa <?php echo $item->icon_komoditas; ?>"></i> <span><?php echo $item->nama_node; ?></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('informasiNode/'.$item->id); ?>"><i class="fa fa-cogs "></i>Informasi</a></li>
            <li><a href="<?php echo base_url('dataTanah/'.$item->kode_node); ?>"><i class="fa fa-circle-o"></i> Data Tanah</a></li>
            <li><a href="<?php echo base_url('dataSuhu/'.$item->kode_node); ?>"><i class="fa fa-circle-o"></i> Data Suhu</a></li>
            <li><a href="<?php echo base_url('dataDewPoint/'.$item->kode_node); ?>"><i class="fa fa-circle-o"></i> Data Dew Point</a></li>
            <li><a href="<?php echo base_url('dataUdara/'.$item->kode_node); ?>"><i class="fa fa-circle-o"></i> Data Udara</a></li>
          </ul>
        </li>
        <?php endforeach; ?>
      </ul>
      <ul class="sidebar-menu">
        <li class="header">Akun</li>
          <li>
          <a href="<?php echo base_url('akunEdit'); ?>">
            <i class="fa fa-edit"></i> <span>Edit Profil</span>
          </a>
          </li>

          <li>
          <a href="<?php echo base_url('userLogout'); ?>">
            <i class="fa fa-sign-out"></i> <span>Logout Akun</span>
          </a>
          </li>
      </ul>

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
      <?php $this->load->view('notification/'.$notification); ?>
      <?php $this->load->view('user/'.$view_name); ?>

      <!-- Main row -->

      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.4.0
    </div>
    <strong>Copyright &copy; 2017 <a href="#">Lab Software</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->

  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- jQuery 2.2.3 -->
  <script src="<?php echo base_url('assets/plugins/jQuery/jquery-2.2.3.min.js'); ?>"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
  <!-- SlimScroll -->
  <script src="<?php echo base_url('assets/plugins/slimScroll/jquery.slimscroll.min.js'); ?>"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url('assets/plugins/fastclick/fastclick.js'); ?>" ></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url('assets/dist/js/app.min.js'); ?>"></script>
  <!-- DataTables -->
 <script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
 <script src="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.min.js'); ?>"></script>


 <!-- FLOT CHARTS -->
 <script src="<?php echo base_url('./assets/plugins/flot/jquery.flot.min.js'); ?>"></script>

 <script src="<?php echo base_url('./assets/plugins/flot/jquery.flot.min.js'); ?>"></script>
 <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
 <script src="<?php echo base_url('./assets/plugins/flot/jquery.flot.resize.min.js'); ?>"></script>
 <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
 <script src="<?php echo base_url('./assets/plugins/flot/jquery.flot.pie.min.js'); ?>"></script>
 <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
 <script src="<?php echo base_url('./assets/plugins/flot/jquery.flot.categories.min.js'); ?>"></script>
 <!-- Page script -->

 <!-- ChartJS 1.0.1 -->
 <script src="<?php echo base_url('./assets/plugins/chartjs/Chart.min.js'); ?>"></script>

 <script src="<?php echo base_url('./assets/plugins/chartjs/Chart.min.js'); ?>"></script>

 <script>
 $("#example1").DataTable();
 $('#example2').DataTable({
   "paging": true,
   "lengthChange": false,
   "searching": true,
   "ordering": true,
   "info": true,
   "autoWidth": true
 });

 </script>


 <script>
   $(function () {
     /* ChartJS
      * -------
      * Here we will create a few charts using ChartJS
      */
      <?php //echo $chart;
      if(!empty($dataNode)){
      foreach ($dataNode as $item):
        $id[] = $item->id;
        if ($view_name=='dataSuhu') {
          $devPoint[] = $item->data_value;
        } elseif ($view_name=='dataTanah') {
          $devPoint[] = $item->data_value;
        } elseif ($view_name=='dataUdara') {
          $devPoint[] = $item->data_value;
        } elseif ($view_name=='dataDewPoint') {
          $devPoint[] = $item->data_value;
        } else {
          $devPoint[] = $item->data;
        }
      endforeach;
      }
      ?>
     //--------------
     //- AREA CHART -
     //--------------

     // Get context with jQuery - using jQuery's .get() method.
     <?php
     if (!empty($devPoint)) {
     ?>
     var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
     // This will get the first returned node in the jQuery collection.
     var areaChart = new Chart(areaChartCanvas);

     var areaChartData = {
       labels: <?php echo json_encode($id); ?>,
       datasets: [
         {
           label: "dewPoint",
           fillColor: "rgba(210, 214, 222, 1)",
           strokeColor: "rgba(210, 214, 222, 1)",
           pointColor: "rgba(210, 214, 222, 1)",
           pointStrokeColor: "#c1c7d1",
           pointHighlightFill: "#fff",
           pointHighlightStroke: "rgba(220,220,220,1)",
           data: <?php echo json_encode($devPoint)?>
         }
       ]
     };

     var areaChartOptions = {
       //Boolean - If we should show the scale at all
       showScale: true,
       //Boolean - Whether grid lines are shown across the chart
       scaleShowGridLines: false,
       //String - Colour of the grid lines
       scaleGridLineColor: "rgba(0,0,0,.05)",
       //Number - Width of the grid lines
       scaleGridLineWidth: 1,
       //Boolean - Whether to show horizontal lines (except X axis)
       scaleShowHorizontalLines: true,
       //Boolean - Whether to show vertical lines (except Y axis)
       scaleShowVerticalLines: true,
       //Boolean - Whether the line is curved between points
       bezierCurve: true,
       //Number - Tension of the bezier curve between points
       bezierCurveTension: 0.3,
       //Boolean - Whether to show a dot for each point
       pointDot: false,
       //Number - Radius of each point dot in pixels
       pointDotRadius: 4,
       //Number - Pixel width of point dot stroke
       pointDotStrokeWidth: 1,
       //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
       pointHitDetectionRadius: 20,
       //Boolean - Whether to show a stroke for datasets
       datasetStroke: true,
       //Number - Pixel width of dataset stroke
       datasetStrokeWidth: 2,
       //Boolean - Whether to fill the dataset with a color
       datasetFill: true,
       //String - A legend template
       legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
       //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
       maintainAspectRatio: true,
       //Boolean - whether to make the chart responsive to window resizing
       responsive: true
     };

     //Create the line chart
     areaChart.Line(areaChartData, areaChartOptions);

     //-------------
     //- LINE CHART -
     //--------------
     // var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
     // var lineChart = new Chart(lineChartCanvas);
     // var lineChartOptions = areaChartOptions;
     // lineChartOptions.datasetFill = false;
     // lineChart.Line(areaChartData, lineChartOptions);

     // //-------------
     // //- PIE CHART -
     // //-------------
     // // Get context with jQuery - using jQuery's .get() method.
     // var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
     // var pieChart = new Chart(pieChartCanvas);
     // var PieData = [
     //   {
     //     value: 700,
     //     color: "#f56954",
     //     highlight: "#f56954",
     //     label: "Chrome"
     //   },
     //   {
     //     value: 500,
     //     color: "#00a65a",
     //     highlight: "#00a65a",
     //     label: "IE"
     //   },
     //   {
     //     value: 400,
     //     color: "#f39c12",
     //     highlight: "#f39c12",
     //     label: "FireFox"
     //   },
     //   {
     //     value: 600,
     //     color: "#00c0ef",
     //     highlight: "#00c0ef",
     //     label: "Safari"
     //   },
     //   {
     //     value: 300,
     //     color: "#3c8dbc",
     //     highlight: "#3c8dbc",
     //     label: "Opera"
     //   },
     //   {
     //     value: 100,
     //     color: "#d2d6de",
     //     highlight: "#d2d6de",
     //     label: "Navigator"
     //   }
     // ];
     // var pieOptions = {
     //   //Boolean - Whether we should show a stroke on each segment
     //   segmentShowStroke: true,
     //   //String - The colour of each segment stroke
     //   segmentStrokeColor: "#fff",
     //   //Number - The width of each segment stroke
     //   segmentStrokeWidth: 2,
     //   //Number - The percentage of the chart that we cut out of the middle
     //   percentageInnerCutout: 50, // This is 0 for Pie charts
     //   //Number - Amount of animation steps
     //   animationSteps: 100,
     //   //String - Animation easing effect
     //   animationEasing: "easeOutBounce",
     //   //Boolean - Whether we animate the rotation of the Doughnut
     //   animateRotate: true,
     //   //Boolean - Whether we animate scaling the Doughnut from the centre
     //   animateScale: false,
     //   //Boolean - whether to make the chart responsive to window resizing
     //   responsive: true,
     //   // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
     //   maintainAspectRatio: true,
     //   //String - A legend template
     //   legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
     // };
     // //Create pie or douhnut chart
     // // You can switch between pie and douhnut using the method below.
     // pieChart.Doughnut(PieData, pieOptions);

     // //-------------
     // //- BAR CHART -
     // //-------------
     // var barChartCanvas = $("#barChart").get(0).getContext("2d");
     // var barChart = new Chart(barChartCanvas);
     // var barChartData = areaChartData;
     // barChartData.datasets[1].fillColor = "#00a65a";
     // barChartData.datasets[1].strokeColor = "#00a65a";
     // barChartData.datasets[1].pointColor = "#00a65a";
     // var barChartOptions = {
     //   //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
     //   scaleBeginAtZero: true,
     //   //Boolean - Whether grid lines are shown across the chart
     //   scaleShowGridLines: true,
     //   //String - Colour of the grid lines
     //   scaleGridLineColor: "rgba(0,0,0,.05)",
     //   //Number - Width of the grid lines
     //   scaleGridLineWidth: 1,
     //   //Boolean - Whether to show horizontal lines (except X axis)
     //   scaleShowHorizontalLines: true,
     //   //Boolean - Whether to show vertical lines (except Y axis)
     //   scaleShowVerticalLines: true,
     //   //Boolean - If there is a stroke on each bar
     //   barShowStroke: true,
     //   //Number - Pixel width of the bar stroke
     //   barStrokeWidth: 2,
     //   //Number - Spacing between each of the X value sets
     //   barValueSpacing: 5,
     //   //Number - Spacing between data sets within X values
     //   barDatasetSpacing: 1,
     //   //String - A legend template
     //   legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
     //   //Boolean - whether to make the chart responsive
     //   responsive: true,
     //   maintainAspectRatio: true
     // };

     // barChartOptions.datasetFill = false;
     // barChart.Bar(barChartData, barChartOptions);
     <?php
     }
     ?>
   });
 </script>

 </body>
 </html>
