
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        
        <div class="sidebar-brand-text mx-3">Sistem Inventaris</div>
      </a>
      <hr class="sidebar-divider my-0">
      <!-- Divider -->
      <li class="nav-item">
          <a class="nav-link" href="<?= base_url('owner')?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Dashboard</span></a>
        </li>
      <hr class="sidebar-divider my-0">
      <div class="sidebar-heading">
        Laporan
      </div>
       <li class="nav-item">
          <a class="nav-link" href="<?= base_url('owner/pengadaan')?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Laporan Pengadaan</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('owner/inventaris')?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Laporan Inventaris</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('admin/inventaris')?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Helpdesk</span></a>
        </li>
      <hr class="sidebar-divider my-0">
      <div class="sidebar-heading">
        Petugas
      </div>
       <li class="nav-item">
          <a class="nav-link" href="<?= base_url('owner/petugas')?>">
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