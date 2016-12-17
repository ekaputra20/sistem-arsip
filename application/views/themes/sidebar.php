<?php if ($this->session->userdata('level')=='administrator') {?>
<ul class="nav navbar-nav side-nav">

<h1><?php $active = 'active' ?></h1>
    <li class="<?php if($this->uri->segment(1) == 'arsip') echo $active; ?>"><a href="<?php echo site_url('arsip'); ?>"><i class="fa fa-table fa-fw"></i> Daftar Kegiatan</a></li>
    <li class="<?php if($this->uri->segment(1) == 'pengelola') echo $active; ?>"><a href="<?php echo site_url('pengelola'); ?>"><i class="fa fa-table fa-fw"></i> Daftar Pengguna</a></li>
    <li class="<?php if($this->uri->segment(1) == 'laporan') echo $active;  ?>"><a href="<?php echo site_url('laporan'); ?>"><i class="fa fa-table fa-fw"></i> Laporan</a></li>

</ul>

<?php } else if ($this->session->userdata('level')=='pengelola') {?>
<ul class="nav navbar-nav side-nav">
<h1><?php $active = 'active' ?></h1>
    <li class="<?php if($this->uri->segment(1) == 'arsip') echo $active; ?>"><a href="<?php echo site_url('arsip'); ?>"><i class="fa fa-table fa-fw"></i> Daftar Kegiatan</a></li>
    <li class="<?php if($this->uri->segment(1) == 'laporan') echo $active; ?> ?>"><a href="<?php echo site_url('laporan'); ?>"><i class="fa fa-table fa-fw"></i> Laporan</a></li>

</ul>
<?php } ?>