
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        
        <div class="sidebar-brand-text mx-3">Sistem Inventaris</div>
      </a>

      <!-- Divider -->
      <li class="nav-item">
          <a class="nav-link" href="<?= base_url('admin')?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Dashboard</span></a>
        </li>
      <hr class="sidebar-divider my-0">
      <div class="sidebar-heading">
        Inventaris
      </div>
       <li class="nav-item">
          <a class="nav-link" href="<?= base_url('admin/pengadaan')?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Pengadaan Barang</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('admin/inventaris')?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Inventaris</span></a>
        </li>
      <hr class="sidebar-divider my-0">
    <li class="nav-item">
          <a class="nav-link" href="<?= base_url('admin/inventaris')?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Helpdesk</span></a>
        </li>  
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