@extends('user.layouts.app')
@section('title')
  List Lomba
@endsection

@section('content')
  <div class="card mb-5">
    <div class="card-header">
      <h6 class="m-0 font-weight-bold text-primary">
        List Lomba
      </h6>
    </div>
    <div class="card-body">
      
      <div class="row">
        <div class="col-3">
          <div class="list-group" id="myList" role="tablist">
            @foreach ($lombas as $tablomba)
            <a class="list-group-item list-group-item-action" data-toggle="list" href="#{{Str::of($tablomba->name)->replace(' ', '')}}" role="tab">
              {{ $tablomba->name }}
            </a>
            @endforeach
          </div>
        </div>
        <div class="col-9">
          <div class="tab-content">
            @foreach ($lombas as $lomba)
            <div class="tab-pane active" id="{{Str::of($lomba->name)->replace(' ', '')}}" role="tabpanel">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th scope="col">Nama</th>
                      <th scope="col">Deskripsi</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td scope="row">{{ $lomba->name }}</td>
                      <td>{{ $lomba->description }}</td>
                      <td>Rp. {{ $lomba->price }}</td>
                      <td><a href="{{ route('user.daftarlomba') }}" class="btn btn-primary">Daftar</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            
            
            @endforeach
          </div>
        </div>
      </div>
      <!--
      <div class="row">
        <div class="col-3">
          <div class="list-group" id="list-tab" role="tablist">
            @foreach ($lombas as $tablomba)
            <a class="list-group-item list-group-item-action" id="list-{{$tablomba->name}}-list" data-toggle="list" href="#list-{{$tablomba->name}}" role="tab" aria-controls="{{$tablomba->name}}">{{ $tablomba->name }}</a>
            @endforeach
            
            
          </div>
        </div>
        <div class="col-9">
          <div class="tab-content" id="nav-tabContent">
            @foreach ($lombas as $lomba)
            @if ($lomba->name == $tablomba->name)
            <div class="tab-pane fade show" id="list-{{$lomba->name}}" role="tabpanel" aria-labelledby="list-{{$lomba->name}}-list">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th scope="col">Nama</th>
                      <th scope="col">Deskripsi</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td scope="row">{{ $lomba->name }}</td>
                      <td>{{ $lomba->description }}</td>
                      <td>Rp. {{ $lomba->price }}</td>
                      <td><a href="{{ route('user.daftarlomba') }}" class="btn btn-primary">Daftar</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            @endif
            @endforeach
            
          </div>
        </div>
      </div>-->
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

