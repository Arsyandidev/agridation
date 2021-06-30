@extends('user.layouts.app')
@section('title')
  List Webinar
@endsection

@section('content')
  <div class="card">
    <div class="card-header">
      <h6 class="m-0 font-weight-bold text-primary">
        List Webinar
      </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Tema Webinar</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Harga</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td scope="row">Unggul dengan Budidaya Tanaman
                Organik Microgreens</td>
              <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum quod nobis aspernatur explicabo
                vel suscipit pariatur debitis, quas autem eu</td>
              <td>Rp. 30.000</td>
              <td><a href="{{ route('user.daftarwebinar') }}" class="btn btn-primary">Daftar</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
  <script>
    $(function() {
      $('#myList a:last-child').tab('show')
    })

  </script>
@endpush
