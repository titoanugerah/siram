<ul class="sidebar-menu">
  <li class="header">Beranda</li>
  <li><a href="<?php echo base_url('dashboard'); ?>">
    <i class="fa fa-h-square"></i> <span>Halaman Utama</span>
  </a></li>
</ul>
<ul class="sidebar-menu">
  <li class="header">Node</li>
  <?php foreach ($content['node'] as $item) : ?>
    <li><a href="<?php echo base_url('detailUserNode/'.$item->id); ?>">
      <i class="fa fa-code-fork"></i> <span><?php echo $item->nama_node; ?></span>
    </a></li>
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
