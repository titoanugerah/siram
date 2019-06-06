<ul class="sidebar-menu">
  <li class="header">Beranda</li>
  <li><a href="<?php echo base_url('userHome'); ?>">
    <i class="fa fa-h-square"></i> <span>Halaman Utama</span>
  </a></li>
</ul>
<ul class="sidebar-menu">
  <li class="header">Node</li>
  <?php foreach ($content['node'] as $item) : ?>
    <li class="treeview">
      <a href="#">
        <i class="fa <?php echo $item->icon_komoditas; ?>"></i> <span><?php echo $item->nama_node; ?></span>
        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo base_url('informasiNode/'.$item->id); ?>"><i class="fa fa-cogs "></i>Informasi</a></li>
        <li><a href="<?php echo base_url('dataTanah/'.$item->kode_node); ?>"><i class="fa fa-circle-o"></i> Data Tanah</a></li>
        <li><a href="<?php echo base_url('dataSuhu/'.$item->kode_node); ?>"><i class="fa fa-circle-o"></i> Data Suhu</a></li>
        <li><a href="<?php echo base_url('dataDewPoint/'.$item->kode_node); ?>"><i class="fa fa-circle-o"></i> Data Dew Point</a></li>
        <li><a href="<?php echo base_url('dataUdara/'.$item->kode_node); ?>"><i class="fa fa-circle-o"></i> Data Udara</a></li>
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
      <i class="fa fa-sign-out"></i> <span>Logout</span>
    </a>
  </li>
</ul>
