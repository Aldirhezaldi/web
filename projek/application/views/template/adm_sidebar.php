<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home_adm">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-project-diagram"></i>
    </div>
    <div class="sidebar-brand-text mx-3">PROJEK</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Heading -->
  <div class="sidebar-heading">
    Administrator
  </div>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="home_adm">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Admin
  </div>

  <!-- Nav Item - Charts -->
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('admin'); ?>">
      <i class="far fa-fw fa-user-circle"></i>
      <span>Profile Admin</span></a>
  </li>

  <!-- Nav Item - Charts -->
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('adm_det_undangan'); ?>">
      <i class="far fa-fw fa-envelope"></i>
      <span>Surat Undangan</span></a>
  </li>
  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
      <i class="fas fa-fw fa-envelope"></i>
      <span>Peminjaman Surat</span>
    </a>
    <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="<?= base_url('adm_pem_organisasi'); ?>">Peminjaman Ke Organisasi</a>
        <a class="collapse-item" href="<?= base_url('adm_pem_transportasi'); ?>">Peminjaman Transportasi</a>
        <a class="collapse-item" href="<?= base_url('adm_pem_gedung'); ?>">Peminjaman Gedung</a>
        <a class="collapse-item" href="<?= base_url('adm_detail_pjm'); ?>">Detail Peminjaman</a>
        <div class="collapse-divider"></div>
      </div>
    </div>
  </li>
  <!-- Nav Item - Pages Collapse Menu -->
  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
      <i class="fas fa-fw fa-users"></i>
      <span>User</span>
    </a>
    <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="<?= base_url('adm_users_org'); ?>">User Organisasi</a>
        <a class="collapse-item" href="<?= base_url('adm_users_pim'); ?>">User Pimpinan</a>
        <div class="collapse-divider"></div>
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
      <i class="fas fa-fw fa-sign-out-alt"></i>
      <span>Logout</span></a>
  </li>





  <!-- Nav Item - Charts -->
  <!-- <li class="nav-item">
  <a class="nav-link" href="charts.html">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Charts</span></a>
</li> -->

  <!-- Nav Item - Tables -->
  <!-- <li class="nav-item">
  <a class="nav-link" href="tables.html">
    <i class="fas fa-fw fa-table"></i>
    <span>Tables</span></a>
</li> -->

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->