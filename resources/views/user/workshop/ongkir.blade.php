<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cek Ongkir</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
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
      
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>
          
            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search"
                  aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>
          
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
          
              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                  <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                        aria-label="Search" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>
          
              
          
              <div class="topbar-divider d-none d-sm-block"></div>
          
              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                  <img class="img-profile rounded-circle" src="{{ asset('img/undraw_profile.svg') }}">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Keluar
                  </a>
          
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </div>
              </li>
          
            </ul>
          
          </nav>
          
        <!-- End of Topbar -->
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">
            </h1>
          </div>

          <div class="card">
            <div class="card-header">
              <h6 class="m-0 font-weight-bold text-primary">
                Cek Ongkir
              </h6>
            </div>
            <form action="{{ url('/peserta/workshop/ongkir') }}" method="GET">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <h6>Nama anda</h6>
                            <input type="text" class="form-control" name="name">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <h6>Kirim dari</h6>
                            <select name="province_from" class="form-control">
                              <option value="">Pilih Provinsi</option>
                              @foreach ($provinsi as $result)
                                <option value="{{ $result->id }}">{{ $result->province }}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="form-group">
                            <select name="origin" class="form-control">
                              <option value="">Pilih Kota</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <h6>Kirim ke</h6>
                            <select name="province_to" class="form-control">
                              <option value="">Pilih Provinsi</option>
                              @foreach ($provinsi as $result)
                                <option value="{{ $result->id }}">{{ $result->province }}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="form-group">
                            <select name="destination" class="form-control">
                              <option value="">Pilih Kota</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <h6>Berat Paket</h6>
                            <input type="text" class="form-control" name="weight">
                            <small>Dalam gram contoh = 1700 / 1,7 kg</small>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <h6>Pilih Kurir</h6>
                            <select name="courier" class="form-control">
                              <option value="" holder>Pilih Kurir</option>
                              <option value="jne">JNE</option>
                              <option value="tiki">TIKI</option>
                              <option value="pos">POS Indonesia</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <button type="submit" class="btn btn-info btn-block">Hitung Ongkir</button>
                          </div>
                        </div>
                      </div>
                </div>
            </form>
              
            @if ($cekongkir)
                <div class="row">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Service</th>
                          <th>Deskripsi</th>
                          <th>Harga</th>
                          <th>Estimasi</th>
                          <th>Note</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($cekongkir as $result)
                          <tr>
                            <td>{{ $result['service'] }}</td>
                            <td>{{ $result['description'] }}</td>
                            <td>{{ $result['cost'][0]['value'] }}</td>
                            <td>{{ $result['cost'][0]['etd'] }}</td>
                            <td>{{ $result['cost'][0]['note'] }}</td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              @endif
            
            <div class="card-footer">
              <a href="{{ route('user.daftarworkshop') }}" class="btn btn-primary">Lanjutkan Pendaftaran</a>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Agridation 2021</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

  <!-- Page level plugins -->
  <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
  <script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>

  <script type="text/javascript">
    $(document).ready(function () {
        $('select[name="province_from"]').on('change', function () {
            var cityId = $(this).val();
            if (cityId) {
                $.ajax({
                    url: 'getCity/ajax/' + cityId,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        $('select[name="origin"]').empty();
                        $.each(data, function (key, value) {
                            $('select[name="origin"]').append(
                                '<option value="' +
                                key + '">' + value + '</option>'
                            );
                        });
                    }
                });
            } else {
                $('select[name="origin"]').empty();
            }
        });

        $('select[name="province_to"]').on('change', function () {
            var cityId = $(this).val();
            if (cityId) {
                $.ajax({
                    url: 'getCity/ajax/' + cityId,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        $('select[name="destination"]').empty();
                        $.each(data, function (key, value) {
                            $('select[name="destination"]').append(
                                '<option value="' +
                                key + '">' + value + '</option>'
                            );
                        });
                    }
                });
            } else {
                $('select[name="destination"]').empty();
            }
        });
    });
</script>
</body>

</html>
