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
                      <div class="card mb-3" style="width:100%">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="{{ Storage::url($dlombas->bukti) }}" class="img-thumbnail" style="width: 100%" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <div class="table-responsive">
                                <table class="table table-striped">
                                    <h3 class="mb-2">{{ $dlombas->pelogin }}</h3>
                                    <tr>
                                        <th>Nama Tim</th>
                                        <th>:</th>
                                        <td>{{ $dlombas->tim }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama Anggota</th>
                                        <th>:</th>
                                        <td>{{ $dlombas->anggota1 }} - {{ $dlombas->anggota2 }} - {{ $dlombas->anggota3 }} - {{ $dlombas->anggota4 }}</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <th>:</th>
                                        <td>{{ $dlombas->status }}</td>
                                    </tr>
                                    <tr>
                                        <th>Lomba yang di ikuti</th>
                                        <th>:</th>
                                        <td>{{ $dlombas->getLomba->name }}</td>
                                    </tr>
                                </table>
                              </div>
                            </div>
                            <hr class="mb-3">
                            <div class="container">
                                <a href="{{route('dlomba.edit', $dlombas->id)}}" class="btn btn-warning mb-3">Edit</a>
                                <form action="{{route('dlomba.destroy', $dlombas->id)}}" method="POST" class="d-inline">
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