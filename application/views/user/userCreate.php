<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MocoPath</title>
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
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/iCheck/square/blue.css'); ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a><b>Moco</b>Path</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">

    <form role="form" method="post">
              <div class="box-body">
                <div class="input-group">
                  <span class="input-group-addon">@</span>
                  <input type="text" class="form-control" name="username" placeholder="Masukan username anda">
                </div>
                <div class="form-group">
                  <br>
                  <input type="password" class="form-control" name="password" placeholder="Masukan password anda">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="ktp" placeholder="Masukan No KTP anda">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="fullname" placeholder="Masukan nama lengkap anda">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="nickname" placeholder="Masukan nama panggilan anda">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="email" placeholder="Masukan email anda">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="address" placeholder="Masukan alamat anda">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="city" placeholder="Masukan Kota Anda">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="phone_number" placeholder="Masukan No HP anda">
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" value="userDataCreate" name="userDataCreate">Sign Up</button>
              </div>
            </form>


    <!-- /.social-auth-links -->
    <a href="superAdminLogin">Login Super Admin</a><br>
    <a href="adminLogin">Login Admin Perpustakaan</a><br>
    <a href="userLogin">Login untuk Pengguna</a><br>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('assets/plugins/jQuery/jquery-2.2.3.min.js'); ?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/plugins/iCheck/icheck.min.js'); ?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
