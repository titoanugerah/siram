<meta http-equiv="refresh" content="60">
<div class="box">
  <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#info" data-toggle="tab"><i class="fa fa-info-circle">&nbsp;</i>Informasi</a></li>
      <?php foreach ($content['dataset'] as $item): ?>
        <li><a href="#<?php echo $item->nama_sensor; ?>" data-toggle="tab"><i class="fa fa-code-fork">&nbsp;</i><?php echo $item->nama_sensor; ?></a></li>
      <?php endforeach; ?>

    </ul>
    <div class="tab-content">
      <div class="active tab-pane" id="info">
        <form role="form" method="post">
          <div class="box-body">
            <div class="form-group">
              <center>
                <h3> Detail Node <?php echo $content['detail']->kode_node; ?>  </h3>
              </center>
            </div>
            <div class="form-group">
              <label for="">Nama Node</label>
              <input type="text" class="form-control"  name="nama_node" value="<?php echo $content['detail']->nama_node; ?>">
            </div>
            <div class="form-group">
              <label for="">Jenis Komoditas yang Diteliti</label>
              <select name="id_komoditas" class="js-example-basic-single select2" style="width: 100%;" required>
                <?php foreach ($content['komoditas'] as $item): ?>
                  <option value="<?php echo $item->id; ?>" <?php if($item->id==$content['detail']->id_komoditas){echo 'selected';} ?>><?php echo $item->nama_komoditas; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="">Nama Node</label>
              <input type="text" class="form-control"  value="<?php echo $content['detail']->fullname; ?>">
            </div>
            <div class="form-group">
              <label for="">Status Penyiraman</label>
              <input type="text" class="form-control"  name="status" value="<?php if($content['detail']->status==1){echo 'Menyala';} else {echo 'Tidak Menyala';} ?>">
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary" name="updateNode" value="updateNode">Perbaharui Node</button>
            <button type="submit" class="btn btn-<?php if ($content['detail']->status==1){echo 'danger';} else {echo 'success';}  ?>" name="turn" value="turn"><?php if($content['detail']->status==1){echo 'Matikan Penyiraman'; }else{echo 'Nyalakan Penyiraman';} ?></button>
            <button type="submit" class="btn btn-grey" name="downloadConf" value="downloadConf">Unduh Konfigurasi Node</button>

            <a href="<?php echo base_url('node'); ?>" class="btn btn-warning">Kembali</a>
          </div>
        </form>
      </div>
      <?php $i=1; foreach ($content['dataset'] as $item): ?>
        <div class="tab-pane" id="<?php echo $item->nama_sensor ?>">


          <!-- /.box-header -->
          <div class="box-body">
<div id="container<?php echo $i; ?>" style="width:100%; height:400px;"></div>
            <script>
            Highcharts.chart('container<?php echo $i; ?>', {
            title: {
              text: 'Grafik <?php echo $item->nama_sensor; ?>'
            },

            subtitle: {
              text: 'Sumber: Node <?php echo $content['detail']->kode_node; ?>'
            },

            yAxis: {
              title: {
                text: '<?php echo ucfirst($item->nama_sensor); ?>'
              }
            },
            legend: {
              layout: 'horizontal',
              align: 'center',
              verticalAlign: 'bottom'
            },

            plotOptions: {
              series: {
                label: {
                  connectorAllowed: false
                },
                pointStart: 2010
              }
            },

            series: [{
              name: '<?php echo ucfirst($item->nama_sensor); ?>',
              data: [<?php foreach ($content['dataNode'] as $item1): if(($item1->topik[6]=='/'&&$item1->topik[7]!=$item->nama_sensor[0]) || ($item1->topik[7]=='/'&&$item1->topik[8]!=$item->nama_sensor[0]) || ($item1->topik[8]=='/'&&$item1->topik[9]!=$item->nama_sensor[0])){continue;}?>
                <?php echo $item1->data_value.','; ?>
              <?php endforeach; ?>]
            }, ],

            responsive: {
              rules: [{
                condition: {
                  maxWidth: 500
                },
                chartOptions: {
                  legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                  }
                }
              }]
            }

          });
            </script>
            <table id="example<?php echo $i; ?>" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <center>
                    <th>No</th>
                    <th>Topik</th>
                    <th>Waktu</th>
                    <th>Data Udara</th>
                  </center>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php $j=1; foreach ($content['dataNode'] as $item1): if(($item1->topik[6]=='/'&&$item1->topik[7]!=$item->nama_sensor[0]) || ($item1->topik[7]=='/'&&$item1->topik[8]!=$item->nama_sensor[0]) || ($item1->topik[8]=='/'&&$item1->topik[9]!=$item->nama_sensor[0])){continue;}?>
                    <td><?php echo $j; ?></td>
                    <td><?php echo $item1->topik; ?></td>
                    <td><?php echo $item1->waktu; ?></td>
                    <td><?php echo $item1->data_value; ?></td>
                  </tr>
                  <?php $j++; endforeach; ?>
                </tbody>
              </table>
            </div>

          </div>
          <?php $i++; endforeach; ?>
      </div>
    </div>
  </div>
