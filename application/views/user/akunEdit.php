<section class="content">
  <div class="box" style="">
    <div class="box-header with border">

<form role="form" method="post">
              <div class="box-body">

                <div class="form-group">
                  <h1> Edit akun <?php echo $this->session->userdata['fullname']; ?>  </h1>
                </div>
                <div class="form-group">
                  <label for="">Username</label>
                  <input type="text" class="form-control"  name="username" value="<?php echo $this->session->userdata['username']; ?>">
                </div>
                <div class="form-group">
                  <label for="">Password</label>
                  <input type="password" class="form-control"  name="password" value="<?php echo $this->session->userdata['password']; ?>">
                </div>
                <div class="form-group">
                  <label for="">Nama Lengkap</label>
                  <input type="text" class="form-control"  name="fullname" value="<?php echo $this->session->userdata['fullname']; ?>">
                </div>
            </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="updateAkun" value="updateAkun">Perbaharui Data</button>
              </div>
            </form>
          </div>
        </div>
      </section>
