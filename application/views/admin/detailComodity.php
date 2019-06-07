<div class="box">
  <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#detailComodity" data-toggle="tab"><i class="fa fa-leaf">&nbsp;</i>Detail Komoditas</a></li>
      <li><a href="#listSensor" data-toggle="tab"><i class="fa fa-magnet">&nbsp;</i>Daftar Sensor</a></li>
    </ul>
    <div class="tab-content">
      <div class="active tab-pane" id="profile">
        <form role="form" method="post">
          <div class="box-body">
            <div class="form-group">
              <center>
              <h3> Detail Komoditas <?php echo $content['comodity']->nama_komoditas; ?>  </h3>
            </center>
            </div>
            <div class="form-group">
              <label for="">Nama Komoditas</label>
              <input type="text" class="form-control"  name="nama_komoditas" value="<?php echo $content['comodity']->nama_komoditas; ?>">
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary" name="updateUser" value="updateUser">Perbaharui Komoditas</button>
            <a href="<?php echo base_url('comodity'); ?>" class="btn btn-warning">Kembali</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="submit" class="btn btn-danger" name="deleteComodity" value="deleteComodity">Hapus Komoditas</button>
          </div>
        </form>
      </div>
      <div class="tab-pane" id="listSensor">
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
