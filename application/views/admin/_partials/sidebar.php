<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-laugh-wink"></i>
  </div>
  <div class="sidebar-brand-text mx-3"><?php echo SITE_NAME ?></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
  <a class="nav-link" href="<?php echo site_url('admin') ?>">
    <i class="fas fa-home fa-fw"></i>
    <span>Home</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<li class="nav-item <?php echo $this->uri->segment(2) == 'services' ? 'active': '' ?>">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
    <i class="fa fa-fw fa-heart" aria-hidden="true"></i>
    <span>Services</span>
  </a>
  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      
      <a class="collapse-item" href="<?php echo site_url('admin/services') ?>">Data</a>
      <a class="collapse-item" href="<?php echo site_url('admin/services/add') ?>">Add</a>
    </div>
  </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item <?php echo $this->uri->segment(2) == 'users' ? 'active': '' ?>">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fa fa-fw fa-user" aria-hidden="true"></i>
    <span>Users</span>
  </a>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      
      <a class="collapse-item" href="utilities-color.html">Data</a>
      <a class="collapse-item" href="utilities-border.html">Add</a>
    </div>
  </div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item <?php echo $this->uri->segment(2) == 'settings' ? 'active': '' ?>">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
    <i class="fas fa-fw fa-cog"></i>
    <span>Settings</span>
  </a>
  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
    
      <a class="collapse-item" href="login.html">Login</a>
      <a class="collapse-item" href="register.html">Register</a>
      <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
    </div>
  </div>
</li>


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->