<div class="box">
  <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#createNode" data-toggle="tab"><i class="fa fa-plus">&nbsp;</i>Buat Node Baru</a></li>
      <li><a href="#listNode" data-toggle="tab"><i class="fa fa-code-fork">&nbsp;</i>Rekap Node</a></li>
    </ul>
    <div class="tab-content">
      <div class="active tab-pane" id="createNode">
        <form role="form" method="post">
          <div class="box-body">
            <div class="form-group">
              <center>
              <h3> Form Tambah Node Baru</h3>
            </center>
            </div>
            <div class="form-group">
              <label for="">Nama Node</label>
              <input type="text" class="form-control"  name="nama_node" required>
            </div>
            <div class="form-group">
              <label for="">Jenis Komoditas yang Diteliti</label>
              <select name="id_komoditas" class="js-example-basic-single select2" style="width: 100%;" required>
                <?php foreach ($content['komoditas'] as $item): ?>
                  <option value="<?php echo $item->id; ?>"><?php echo $item->nama_komoditas; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="">Nama Pelanggan</label>
              <select name="id_user" class="js-example-basic-single select2" style="width: 100%;" required>
                <?php foreach ($content['user'] as $item): ?>
                  <option value="<?php echo $item->id; ?>"><?php echo $item->fullname; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <button type="submit" name="createNode" value="createNode" class="btn btn-success">Buat</button>
            </div>
          </div>
          <!-- /.box-body -->
        </form>
      </div>
      <div class="tab-pane" id="listNode">
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-hover">
            <thead>
              <tr>
                <center>
                  <th>No</th>
                  <th>Kode Node</th>
                  <th>Status Penyiraman</th>
                  <th>Opsi</th>
                </center>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php $i=1; foreach ($content['node'] as $item):?>
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
