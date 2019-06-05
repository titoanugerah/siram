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
            <input type="text" class="form-control"  name="kode_node" value="<?php echo $info->kode_node; ?>" disabled >
          </div>
          <div class="form-group">
            <label for="">Nama Node</label>
            <input type="text" class="form-control"  name="nama_node" value="<?php echo $info->nama_node; ?>"  >
          </div>
          <div class="form-group">
            <label for="">Jenis Komoditas yang Diteliti</label>
              <select name="id_komoditas" class="form-control select2" style="width: 100%;">
                <?php foreach ($komoditas as $item): ?>
                  <option value="<?php echo $item->id; ?>" <?php if ($info->nama_komoditas==$item->nama_komoditas) { echo "selected";}?>><?php echo $item->nama_komoditas; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <button type="submit" name="updateNode" value="updateNode" class="btn btn-warning">Simpan</button>
              <button type="submit" name="deleteNode" value="deleteNode" class="btn btn-danger">Hapus</button>
            </div>
        </div>
              <!-- /.box-body -->
            </form>
          </div>
        </div>
      </section>
