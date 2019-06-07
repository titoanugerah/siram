<div class="box">
  <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#createComodity" data-toggle="tab"><i class="fa fa-plus">&nbsp;</i>Buat Komoditas</a></li>
      <li><a href="#listComodity" data-toggle="tab"><i class="fa fa-leaf">&nbsp;</i>Rekap Komoditas</a></li>
    </ul>
    <div class="tab-content">
      <div class="active tab-pane" id="createComodity">
        <form role="form" method="post" class="form-horizontal">
          <center>
            <h3 class="box-title">Buat Komoditas Baru</h3>
          </center>
          <div class="box-body">
            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Komoditas</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  name="nama_komoditas" required>
              </div>
            </div>
          </div>

          <div class="box-footer">
            <div class="form-group">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <button type="submit" name="createComodity" value="createComodity" class="btn btn-success">Buat Komoditas Baru</button>
            </div>
          </div>
        </form>
      </div>
      <div class="tab-pane" id="listComodity">
        <center>
          <h3 class="box-title">Rekap Komoditas</h3>
        </center>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <center>
                  <th>No</th>
                  <th>Nama Komoditas</th>
                  <th>Opsi</th>
                </center>
              </tr>
            </thead>
            <tbody>
              <?php $i=1; foreach ($content['comodity'] as $item):?>
              <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $item->nama_komoditas; ?></td>
                  <td><a class="btn btn-warning" href="<?php echo base_url('detailComodity/'.$item->id); ?>"> <i class="fa fa-file-text"></i> Detail</a></td>
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
