
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
    <img src="{{ asset('admin_assets/img/dprkkp2psu-removebg-preview.png') }}"width="50" height="50">
    <div class="sidebar-brand-text mx-3">SIAPPEM</div>
  </a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  
  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ isset($title) && $title === 'dashboard' ? 'active' : '' }} ">
    <a class="nav-link" href="{{ auth()->user()->type === 'admin' ? route('admin.home') : route('home') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  @if( auth()->user()->type === 'admin' )
  
  <li class="nav-item {{ isset($title) && $title === 'user' ? 'active' : '' }}">
    <a class="nav-link"  href="{{route('admin.userpengembang') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>User</span></a>
  </li>
  @endif
  

  <li class="nav-item {{ isset($title) && $title === 'perumahan' ? 'active' : '' }}">
    <a class="nav-link"  href="{{ auth()->user()->type === 'admin' ? route('perumahan') : route('perumahanhome') }}
    {{-- {{ route('perumahan') }} --}}
    ">
      <i class="fas fa-fw fa-home"></i>
      <span>Perumahan</span></a>
  </li>
  
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  
  
</ul>