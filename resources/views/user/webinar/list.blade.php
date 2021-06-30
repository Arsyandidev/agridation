@extends('user.layouts.app')
@section('title')
  Webinarku
@endsection
@section('content')
  <div class="card">
    <div class="card-header">
      <h6 class="m-0 font-weight-bold text-primary">
        List Webinarku
      </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th scope="col">Nama Lomba</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Harga</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td scope="row">Karya Tulis Ilmiah</td>
              <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum quod nobis aspernatur explicabo vel
                suscipit pariatur debitis, quas autem eu</td>
              <td>Rp. 35.000</td>
              <td><a href="{{ route('user.detail.webinar') }}" class="btn btn-primary btn-sm">Akses Webinar</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
