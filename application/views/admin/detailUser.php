<div class="box">
  <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#profile" data-toggle="tab"><i class="fa fa-user">&nbsp;</i>Detail Pelanggan</a></li>
      <li><a href="#listNode" data-toggle="tab"><i class="fa fa-code-fork">&nbsp;</i>Daftar Node</a></li>
    </ul>
    <div class="tab-content">
      <div class="active tab-pane" id="profile">
        <form role="form" method="post">
          <div class="box-body">
            <div class="form-group">
              <h2> Profil <?php echo "@".$content['user']->username; ?>  </h2>
            </div>
            <div class="form-group">
              <label for="">Username</label>
              <input type="text" class="form-control"  name="username" value="<?php echo $content['user']->username; ?>">
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input type="password" class="form-control"  name="password" value="" placeholder="tulis password anda yang lama atau ganti baru disini">
            </div>
            <div class="form-group">
              <label for="">Nama Lengkap</label>
              <input type="text" class="form-control"  name="fullname" value="<?php echo $content['user']->fullname; ?>">
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary" name="updateUser" value="updateUser">Perbaharui Akun</button>
            <a href="<?php echo base_url('user'); ?>" class="btn btn-warning">Kembali</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="submit" class="btn btn-danger" name="deleteUser" value="deleteUser">Hapus Akun</button>
          </div>
        </form>
      </div>
      <div class="tab-pane" id="listNode">
        <center>
          <h3 class="box-title">Daftar Node Terpasang</h3>
        </center>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <center>
                  <th>No</th>
                  <th>Kode Node</th>
                  <th>Status</th>
                  <th>Opsi</th>
                </center>
              </tr>
            </thead>
            <tbody>
              <?php $i=1; foreach ($content['nodeUser'] as $item):?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $item->kode_node; ?></td>
                <td><?php if($item->status==0){ echo "Tidak Menyala";} else if($item->status==1){ echo "Menyala";}  ?></td>
                <td><a class="btn btn-warning" href="<?php echo base_url('detailNode/'.$item->id); ?>"><i class="fa fa-list"></i> Detail Node</a></td>
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
