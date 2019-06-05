<section class="content">
  <div class="box" style="">
    <div class="box-header with border">
      <form role="form" method="post">
        <div class="box-body">
          <div class="form-group">
            <h1> Informasi <?php echo $info->nama_node; ?>  </h1>
          </div>
          <div class="form-group">
            <label for="">Kode Node</label>
            <input type="text" class="form-control"  name="kode_node" value="<?php echo $info->kode_node; ?>" disabled>
          </div>
          <div class="form-group">
            <label for="">Nama Node</label>
            <input type="text" class="form-control"  name="nama_node" value="<?php echo $info->nama_node; ?>" disabled>
          </div>
          <div class="form-group">
            <label for="">Jenis Komoditas yang Diteliti</label>
            <input type="text" class="form-control"  name="nama_komoditas" value="<?php echo $info->nama_komoditas; ?>" disabled>
          </div>
          <div class="form-group">
            <label for="">Status Penyiraman</label>
            <input type="text" class="form-control"  name="status" value="<?php if($info->status==0){ echo "Tidak Menyiram"; } else {echo "Menyiram";} ; ?>" disabled>
          </div>
          <div class="btn-group" id="realtime">
            <label for="">Kendalikan Status Penyiraman</label> <br>            
            <button type="submit" name="switchON" value="switchON" class="btn btn-default <?php if($info->status==1){ echo "active"; }; ?>">Menyala</button>
            <button type="submit" name="switchOFF" value="switchOFF" class="btn btn-default <?php if($info->status==0){ echo "active"; }; ?>">Mati</button>
          </div>
        </div>
              <!-- /.box-body -->
            </form>
          </div>
        </div>
      </section>
