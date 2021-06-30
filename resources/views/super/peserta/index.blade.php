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
                    <h1 class="h3 mb-2 text-gray-800">Peserta</h1>
                    <a href="{{route('peserta.create')}}" class="btn btn-primary mb-4">Tambah</a>
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Instansi</th>
                            <th scope="col">Role</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1; ?>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $no }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->gender}}</td>
                                <td>{{ $user->address}}</td>
                                <td>{{ $user->agency}}</td>
                                @foreach ($user->roles as $role)
                                    <td>{{ $role->name }}</td>
                                @endforeach
                                <td>
                                    <a href="{{route('peserta.show', $user->id)}}" class="btn btn-primary">Detail</a>
                                </td>
                            </tr>
                        <?php $no++ ?>
                        @endforeach
                        </tbody>
                      </table>
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