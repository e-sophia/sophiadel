<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fa fa-cogs"></i>
    </div>
    <div class="sidebar-brand-text mx-3">BLC INVENTORY</div>
  </a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <li class="nav-item">
    <a class="nav-link" href="{{ route('boutique') }}">
      <i class="fa fa-address-book"></i>
      <span>BOUTIQUE</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('clinic') }}">
      <i class="fa fa-medkit"></i>
      <span>CLINIC</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('library') }}">
      <i class="fa fa-book"></i>
      <span>LIBRARY</span></a>
  </li>
  
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  
  
</ul>