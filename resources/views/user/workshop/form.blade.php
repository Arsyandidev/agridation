@extends('user.layouts.app')

@section('title')
  Pendaftaran Workshop
@endsection

@section('content')
  <div class="card">
    <form role="form" action="#" method="post">
      <div class="card-header">
        <h6 class="m-0 font-weight-bold text-primary">
          Form Pendaftaran
        </h6>
      </div>
      <!-- /.card-header -->
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <!-- form start -->
      <div class="card-body">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="exampleInputEmail1">Nama Lengkap</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="nama_lengkap"
            placeholder="Masukkan Judul">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">No Wa</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="nama_lengkap"
            placeholder="Masukkan Judul">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Alamat</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="nama_lengkap"
            placeholder="Masukkan Judul">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Kartu Identitas</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="nama_lengkap"
            placeholder="Masukkan Judul">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Bukti Pembayaran</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="nama_lengkap"
            placeholder="Masukkan Judul">
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-success" value="save" name="submit"
          onclick="return confirm('Apakah data sudah valid?')">Submit</button>
      </div>
    </form>
  </div>
@endsection
