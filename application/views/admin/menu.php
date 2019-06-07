<ul class="sidebar-menu">
  <li class="header">Beranda</li>
  <li><a href="<?php echo base_url('dashboard'); ?>">
    <i class="fa fa-h-square"></i> <span>Halaman Utama</span>
  </a></li>
</ul>
<ul class="sidebar-menu">
  <li class="header">Konfigurasi</li>
  <li><a href="<?php echo base_url('user'); ?>">
    <i class="fa fa-users"></i> <span>Pengguna</span>
  </a></li>
  <li><a href="<?php echo base_url('node'); ?>">
    <i class="fa fa-code-fork"></i> <span>Node</span>
  </a></li>
  <li><a href="<?php echo base_url('comodity'); ?>">
    <i class="fa fa-leaf"></i> <span>Komoditas</span>
  </a></li>

</ul>

<ul class="sidebar-menu">
  <li class="header">Node</li>

    <?php foreach ($content['node'] as $item) : ?>
      <li class="treeview">
        <a href="#">
          <i class="fa <?php echo $item->icon_komoditas; ?>"></i> <span><?php echo $item->nama_node; ?></span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('node/'.$item->id); ?>"><i class="fa fa-cogs "></i>Informasi</a></li>
          <li><a href="<?php echo base_url('editNode/'.$item->id); ?>"><i class="fa fa-pencil"></i>Edit Node</a></li>
          <li><a href="<?php echo base_url('deleteNode/'.$item->id); ?>"><i class="fa fa-close"></i>Hapus Node</a></li>
          <li><a href="<?php echo base_url('tanah/'.$item->kode_node); ?>"><i class="fa fa-circle-o"></i> Data Tanah</a></li>
          <li><a href="<?php echo base_url('suhu/'.$item->kode_node); ?>"><i class="fa fa-circle-o"></i> Data Suhu</a></li>
          <li><a href="<?php echo base_url('dewPoint/'.$item->kode_node); ?>"><i class="fa fa-circle-o"></i> Data Dew Point</a></li>
          <li><a href="<?php echo base_url('udara/'.$item->kode_node); ?>"><i class="fa fa-circle-o"></i> Data Udara</a></li>
        </ul>
      </li>
    <?php endforeach; ?>
  </ul>
  <ul class="sidebar-menu">
    <li class="header">Akun</li>
    <li>
      <a href="<?php echo base_url('profile'); ?>">
        <i class="fa fa-edit"></i> <span>Profil</span>
      </a>
    </li>
    <li>
      <a href="<?php echo base_url('logout'); ?>">
        <i class="fa fa-sign-out"></i> <span>Logout Akun</span>
      </a>
    </li>
  </ul>
