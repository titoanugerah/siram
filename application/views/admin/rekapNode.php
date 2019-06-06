<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h2 class="box-title">Rekap Node</h2>
      </div>
    <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-hover">
          <thead>
            <tr>
              <center>
              <th>No</th>
              <th>Kode Node</th>
              <th>Nama Node</th>
              <th>Komoditas</th>
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
              <td><?php echo $item->nama_node; ?></td>
              <td><?php echo $item->nama_komoditas; ?></td>
              <td><?php if($item->status==0){ echo "Tidak Menyala";} else if($item->status==1){ echo "Menyala";}  ?></td>
              <td><a href="<?php echo base_url('editNode/'.$item->id); ?>">Edit Node</a> | <a href="<?php echo base_url('deleteNode/'.$item->id); ?>">Delete Node</a></td>

            </tr>
          <?php $i++; endforeach; ?>
        </tbody>
      </table>
    </div>
            <!-- /.box-body -->
  </div>
</div>
</div>
