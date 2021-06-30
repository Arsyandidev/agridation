@extends('super.layouts.app')
@section('title', 'Super Admin - Tambah Peserta')


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
                    <h1 class="h3 mb-0 text-gray-800">Tambah Peserta</h1>
                    
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        </div>
                    @endif

                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{route('peserta.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Name" value="{{old('name')}}" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Jenis Kelamin</label>
                            <input type="text" class="form-control" name="gender" placeholder="Jenis Kelamin" value="{{old('gender')}}" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Alamat</label>
                            <input type="text" class="form-control" name="address" placeholder="Alamat" value="{{old('address')}}" required>
                        </div>
                        <div class="form-group">
                            <label for="name">ID Line</label>
                            <input type="text" class="form-control" name="line_id" placeholder="ID Line" value="{{old('line_id')}}" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Instansi</label>
                            <input type="text" class="form-control" name="agency" placeholder="Instansi" value="{{old('agency')}}" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email" value="{{old('email')}}" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password" value="{{old('password')}}" required>
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