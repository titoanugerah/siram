

  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h2 class="box-title">Rekap Pengguna</h2>
        </div>
      <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <center>
                <th>No</th>
                <th>username</th>
                <th>Password</th>
                <th>fullname</th>
                <th>Opsi</th>
                </center>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php $i=1; foreach ($user as $item):?>
                <td><?php echo $i; ?></td>
                <td><?php echo $item->username; ?></td>
                <td><?php echo $item->password; ?></td>
                <td><?php echo $item->fullname; ?></td>
                <td><a href="<?php echo base_url('editUser/'.$item->id); ?>">Edit User</a> | <a href="<?php echo base_url('deleteUser/'.$item->id); ?>">Delete User</a></td>

              </tr>
            <?php $i++; endforeach; ?>
          </tbody>
        </table>
      </div>
              <!-- /.box-body -->
    </div>
  </div>
