<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Grafik Tanah pada <?php echo $info->nama_node; ?></h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
    </div>
  </div>
  <div class="box-body">
    <div class="chart">
      <canvas id="areaChart" style="height:250px"></canvas>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h2 class="box-title">Data Tanah <?php echo $info->nama_node ?></h2>
      </div>
    <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-hover">
          <thead>
            <tr>
              <center>
              <th>No</th>
              <th>Topik</th>
              <th>Waktu</th>
              <th>Data Tanah</th>
              </center>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php $i=1; foreach ($dataNode as $item):?>
              <td><?php echo $i; ?></td>
              <td><?php echo $item->topik; ?></td>
              <td><?php echo $item->waktu; ?></td>
              <td><?php echo $item->data_value; ?></td>
            </tr>
          <?php $i++; endforeach; ?>
        </tbody>
      </table>
    </div>
            <!-- /.box-body -->
  </div>
