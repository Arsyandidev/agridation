@extends('super.layouts.app')
@section('title', 'Super Admin - Tambah Daftar Lomba')


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
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Tambah Lomba</h1>
                    
                </div>

                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        </div>
                    @endif --}}
                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{route('dlomba.update', $dlombas->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Pelogin</label>
                            <input type="text" class="form-control" name="pelogin" placeholder="Pelogin" value="{{ $dlombas->pelogin }}" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Tim</label>
                            <input type="text" class="form-control" name="tim" placeholder="Nama tim" value="{{ $dlombas->tim }}" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Nama anggota 1</label>
                            <input type="text" class="form-control" name="anggota1" placeholder="Anggota 1" value="{{ $dlombas->anggota1 }}">
                        </div>
                        <div class="form-group">
                            <label for="name">Nama anggota 2</label>
                            <input type="text" class="form-control" name="anggota2" placeholder="Anggota 2" value="{{ $dlombas->anggota2 }}">
                        </div>
                        <div class="form-group">
                            <label for="name">Nama anggota 3</label>
                            <input type="text" class="form-control" name="anggota3" placeholder="Anggota 3" value="{{ $dlombas->anggota3 }}">
                        </div>
                        <div class="form-group">
                            <label for="name">Nama anggota 4</label>
                            <input type="text" class="form-control" name="anggota4" placeholder="Anggota 4" value="{{ $dlombas->anggota4 }}">
                        </div>
                        <div class="form-group">
                            <label for="name">Bukti</label>
                            <input type="file" class="form-control" name="bukti" placeholder="Bukti pendaftaran">
                        </div>
                        <div class="form-group">
                            <label for="name">Status</label>
                            <select name="status" class="form-control" required>
                                <option value="proses">Proses</option>
                                <option value="berhasil">Berhasil</option>
                              </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Nama Lomba</label>
                            <select name="lomba_id" class="form-control" required>
                                <option value="{{ $dlombas->lomba_id }}">Optional</option>
                                @foreach ($lombas as $lomba)
                                <option value="{{$lomba->id}}">
                                  {{$lomba->name}}
                                </option> 
                                @endforeach
                            </select>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </form>
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


@endsection