@extends('user.layouts.app')

@section('title')
  Pendaftaran Lomba
@endsection

@section('content')
  <div class="card">
    <div class="card-header">
      <h6 class="m-0 font-weight-bold text-primary">
        Pendaftaran Lomba
      </h6>
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
    <form role="form" action="{{route('user.daftar')}}" method="POST" enctype="multipart/form-data">
      <div class="card-body">
        

        <!-- form start -->
        @csrf
        

        <fieldset disabled="disabled">
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Lengkap</label>
            <input type="text" class="form-control disabled" id="exampleInputEmail1" name="nama_lengkap"
              value="{{ Auth::user()->name }}">
          </div>
        </fieldset>
        <div class="form-group">
          <label for="exampleInputEmail1">Nama Tim</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="tim"
            value="{{ old('tim') }}">
        </div>
        <div class="form-group">
          <label for="name">Nama anggota 1</label>
          <input type="text" class="form-control" name="anggota1" placeholder="Anggota 1" value="{{old('anggota1')}}">
      </div>
      <div class="form-group">
          <label for="name">Nama anggota 2</label>
          <input type="text" class="form-control" name="anggota2" placeholder="Anggota 2" value="{{old('anggota2')}}">
      </div>
      <div class="form-group">
          <label for="name">Nama anggota 3</label>
          <input type="text" class="form-control" name="anggota3" placeholder="Anggota 3" value="{{old('anggota3')}}">
      </div>
      <div class="form-group">
          <label for="name">Nama anggota 4</label>
          <input type="text" class="form-control" name="anggota4" placeholder="Anggota 4" value="{{old('anggota4')}}">
      </div>
      <div class="form-group">
        <label for="name">Bukti</label>
        <input type="file" class="form-control" name="bukti" placeholder="Bukti pendaftaran">
      </div>
        <!-- /.card-body -->
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-success" value="save" name="submit"
          onclick="return confirm('Apakah data sudah valid?')">Submit</button>
      </div>
    </form>
  </div>
@endsection
