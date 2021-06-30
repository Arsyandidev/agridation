@extends('super.layouts.app')
@section('content')
<div id="wrapper">

        <!-- Sidebar -->
        @include('super.layouts.sidebar')
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

                    @include('layouts.topnav')

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Ini Peserta</h1>
                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="..." alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h3 class="card-title">{{ $pesertas->name }}</h3>
                              <p class="card-text">Jenis Kelamin : {{ $pesertas->gender }}</p>
                              <p class="card-text">Alamat : {{ $pesertas->address }}</p>
                              <p class="card-text">Instansi : {{ $pesertas->agency }}</p>
                              <p class="card-text">ID Line : {{ $pesertas->line_id }}</p>
                              <p class="card-text">Whatsapp : {{ $pesertas->phone }}</p>
                              <p class="card-text">Email : {{ $pesertas->email }}</p>
                            </div>
                            <hr class="mb-3">
                            <div class="container">
                                <a href="{{route('peserta.edit', $pesertas->id)}}" class="btn btn-warning mb-3">Edit</a>
                                <form action="{{route('peserta.destroy', $pesertas->id)}}" method="POST" class="d-inline">
                                  @csrf
                                  @method('delete')
                                  <button class="btn btn-danger mb-3">Hapus</button>
                                </form>
                                
                            </div>
                          </div>
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
<div>
@stop