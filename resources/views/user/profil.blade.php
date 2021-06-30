@extends('user.layouts.app')

@section('title')
  Profile
@endsection

@section('content')
  <div class="row">
    <div class="col-md-4 col-xs-12">
      <div class="card border-left-primary shadow">
        <div class="card-body">
          <div class="mt-4"> <img id="user-image" class="rounded-circle ml-5" width="150"
              src="{{Storage::url($profiles->identity_card)}}">
            <h4 class="card-title mt-2">{{ $profiles->name }}</h4>
            <h6 class="card-subtitle mt-2">Email : {{ $profiles->email }}</h6>
            <h6 class="card-subtitle mt-2">Jenis kelamin : {{ $profiles->gender }}</h6>
            <h6 class="card-subtitle mt-2">Alamat : {{ $profiles->address }}</h6>
            <h6 class="card-subtitle mt-2">Instansi : {{ $profiles->agency }}</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-8 col-xs-12">
      <div class="card">
        <div class="card-header">
          <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link show active" href="#home" role="tab" data-toggle="pill" aria-selected="true"><span
                  class="hidden-xs">Data Diri</span> </a>
            </li>
            
          </ul>
        </div>
        <div class="card-body">

          <div class="tab-content">
            <div class="tab-pane data-diri show active" id="home">
              <form action="{{ route('user.update', $profiles->id) }}" method="POST" class="form-horizontal form-material">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label class="col-md-12">Nama Lengkap</label>
                  <div class="col-md-12">
                    <input type="text" name="name" class="form-control form-control-line" value="{{ $profiles->name }}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-12">Jenis Kelamin</label>
                  <div class="container">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" value="pria" {{ ($profiles->gender == 'pria') ? 'checked' : '' }}>
                      <label class="form-check-label" for="exampleRadios1">
                        Pria
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" value="wanita" {{ ($profiles->gender == 'wanita') ? 'checked' : '' }}>
                      <label class="form-check-label" for="exampleRadios1">
                        Wanita
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-12">Email</label>
                  <div class="col-md-12">
                    <input type="text" name="email" class="form-control form-control-line" value="{{ $profiles->email }}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-12">Nomor HP</label>
                  <div class="col-md-12">
                    <input type="text" name="no_hp" class="form-control form-control-line" value="+62 {{ $profiles->phone }}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-12">Alamat domisili saat ini</label>
                  <div class="col-md-12">
                    <input type="text" name="alamat_domisili" class="form-control form-control-line" value="{{ $profiles->address }}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-12">Instansi</label>
                  <div class="col-md-12">
                    <input type="text" name="institusi_pendidikan" class="form-control form-control-line" value="{{ $profiles->agency }}">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-12">
                    <button class="btn btn-success" id="btn-data-diri">Update</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
