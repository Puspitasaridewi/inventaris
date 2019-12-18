
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        
        <div class="sidebar-brand-text mx-3">Sistem Inventaris</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
          <a class="nav-link" href="<?= base_url('manajemen')?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Dashboard</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <div class="sidebar-heading">
        Master Data
      </div>
      <li class="nav-item">
          <a class="nav-link" href="<?= base_url('manajemen/barang')?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Daftar Barang</span></a>
      </li>
       <li class="nav-item">
          <a class="nav-link" href="<?= base_url('manajemen/cabang')?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Daftar Cabang</span></a>
        </li>
      <hr class="sidebar-divider my-0">
      <div class="sidebar-heading">
        Inventaris
      </div>
  	   <li class="nav-item">
          <a class="nav-link" href="<?= base_url('manajemen/pengadaan')?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Pengadaan Barang</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('manajemen/inventaris')?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Inventaris</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('manajemen/helpdesk')?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Helpdesk</span></a>
        </li>
  	  <hr class="sidebar-divider my-0">
      <div class="sidebar-heading">
        Petugas
      </div>
       <li class="nav-item">
          <a class="nav-link" href="<?= base_url('manajemen/petugas')?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Daftar Petugas</span></a>
        </li>
      <hr class="sidebar-divider my-0">
	  
	  <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout')?>">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->