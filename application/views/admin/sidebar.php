<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('admin')?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fab fa-fw fa-blogger"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> <?php echo "Admin,<b>".$this->session->userdata('nama');?></b></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('admin')?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
       MENU
      </div>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/data_user'); ?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Data User</span></a>
      </li>

       <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/data_barang'); ?>">
          <i class="fas fa-fw fa-bars"></i>
          <span>Data Barang</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/transaksi')?>">
         <i class="fas fa-fw fa-money-bill-alt"></i>
          <span>Data Transaksi</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="tables.html">
         <i class="fas fa-fw fa-clipboard-list"></i>
          <span>Laporan</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->