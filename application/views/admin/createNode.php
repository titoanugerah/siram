<section class="content">
  <div class="box" style="">
    <div class="box-header with border">
      <form role="form" method="post">
        <div class="box-body">
          <div class="form-group">
            <h1> Form Tambah Node Baru</h1>
          </div>
          <div class="form-group">
            <label for="">Nama Node</label>
            <input type="text" class="form-control"  name="nama_node"  >
          </div>
          <div class="form-group">
            <label for="">Jenis Komoditas yang Diteliti</label>
              <select name="id_komoditas" class="form-control select2" style="width: 100%;">
                <?php foreach ($komoditas as $item): ?>
                  <option value="<?php echo $item->id; ?>"><?php echo $item->nama_komoditas; ?></option>
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
        </div>
      </section>
