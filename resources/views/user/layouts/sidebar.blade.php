<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('user.dashboard') }}">
      <div class="sidebar-brand-icon">
        {{-- <i class="fas fa-laugh-wink"></i> --}}
        <img src="{{ asset('img/ic_agridation.svg') }}" width="36" alt="Logo">
      </div>
      <div class="sidebar-brand-text mx-3">Agridation <sup>2021</sup></div>
    </a>
  
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
  
    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Route::currentRouteName() == 'user.dashboard' ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('user.dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Beranda</span></a>
    </li>
  
    <!-- Divider -->
    <hr class="sidebar-divider">
  
    <!-- Heading -->
    <div class="sidebar-heading">
      Main Menu
    </div>
  
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLomba" aria-expanded="true"
        aria-controls="collapseLomba">
        <i class="fas fa-fw fa-cog"></i>
        <span>Lomba</span>
      </a>
      <div id="collapseLomba" class="collapse" aria-labelledby="headingLomba" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item {{ Route::currentRouteName() == 'user.lomba' ? 'active' : '' }}" href="{{ route('user.lomba') }}">Daftar Lomba</a>
          <a class="collapse-item {{ Route::currentRouteName() == 'user.lombaku' ? 'active' : '' }}" href="{{ route('user.lombaku') }}">Lombaku</a>
        </div>
      </div>
    </li>
  
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseWorkshop" aria-expanded="true"
        aria-controls="collapseWorkshop">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Workshop</span>
      </a>
      <div id="collapseWorkshop" class="collapse" aria-labelledby="headingWorkshop" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item {{ Route::currentRouteName() == 'user.workshop' ? 'active' : '' }}" href="{{ route('user.workshop') }}">Daftar Workshop</a>
          <a class="collapse-item {{ Route::currentRouteName() == 'user.workshopku' ? 'active' : '' }}" href="{{ route('user.workshopku') }}">Workshopku</a>
        </div>
      </div>
    </li>
  
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseWebinar" aria-expanded="true"
        aria-controls="collapseWebinar">
        <i class="fas fa-fw fa-folder"></i>
        <span>Webinar</span>
      </a>
      <div id="collapseWebinar" class="collapse" aria-labelledby="headingWebinar" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item {{ Route::currentRouteName() == 'user.webinar' ? 'active' : '' }}" href="{{ route('user.webinar') }}">Daftar Webinar</a>
          <a class="collapse-item {{ Route::currentRouteName() == 'user.webinarku' ? 'active' : '' }}" href="{{ route('user.webinarku') }}">Webinarku</a>
        </div>
      </div>
    </li>
  
    <!-- Divider -->
    <hr class="sidebar-divider">
  
    <!-- Heading -->
    <div class="sidebar-heading">
      Profil
    </div>
  
    <!-- Nav Item - Charts -->
    <li class="nav-item {{ Route::currentRouteName() == 'user.profile' ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('user.profile', Auth::user()->id) }}">
        <i class="fas fa-fw fa-user"></i>
        <span>Profil</span></a>
    </li>
  
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
  
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
  </ul>
  