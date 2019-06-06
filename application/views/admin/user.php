<div class="box">
  <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#createAccount" data-toggle="tab"><i class="fa fa-user">&nbsp;</i>Buat Akun</a></li>
      <li><a href="#listAccount" data-toggle="tab"><i class="fa fa-users">&nbsp;</i>Rekap Akun</a></li>
    </ul>
    <div class="tab-content">
      <div class="active tab-pane" id="createAccount">
        <form role="form" method="post" class="form-horizontal">
          <center>
            <h2 class="box-title">Buat Pelanggan Baru</h2>
          </center>
          <div class="box-body">
            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Pengguna</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  name="username" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control"  name="password"  required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Lengkap</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  name="fullname" required>
              </div>
            </div>
          </div>

          <div class="box-footer">
            <div class="form-group">
              <button type="submit" name="createUser" value="createUser" class="btn btn-success">Buat Akun</button>
            </div>
          </div>
        </form>
      </div>
      <div class="tab-pane" id="listAccount">
        <center>
          <h2 class="box-title">Rekap Akun Pelanggan</h2>
        </center>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <center>
                  <th>No</th>
                  <th>Nama Pengguna</th>
                  <th>Nama Lengkap Pelanggan</th>
                  <th>Opsi</th>
                </center>
              </tr>
            </thead>
            <tbody>
              <?php $i=1; foreach ($content['user'] as $item):?>
              <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $item->username; ?></td>
                  <td><?php echo $item->fullname; ?></td>
                  <td><a class="btn btn-warning" href="<?php echo base_url('detailUser/'.$item->id); ?>"> <i class="fa fa-file-text"></i> Detail</a></td>
                </tr>
                <?php $i++; endforeach; ?>

              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
      </div>
    </div>
  </div>
