@extends('layouts.login_layouts')

@section('content')
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Buat akun Agridation 2021 !</h1>
                        </div>
                        <form class="user" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input id="name" type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Nama Lengkap" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Alamat Email" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="address" type="text" class="form-control form-control-user @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required placeholder="Alamat" autocomplete="address">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input id="phone" type="text" class="form-control form-control-user @error('phone') is-invalid @enderror" name="phone" required placeholder="No WhatsApp" autocomplete="phone">

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input id="identity_card" type="file" class="form-control form-control-user @error('identity_card') @enderror" name="identity_card" required placeholder="Kartu Identitas">

                                    @error('identity_card')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input id="agency" type="text" class="form-control form-control-user @error('agency') is-invalid @enderror" name="agency" required placeholder="Asal Instansi" autocomplete="agency">

                                    @error('agency')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input id="gender" type="radio" class="form-check-input @error('gender') @enderror" name="gender" value="pria">
                                    <label class="form-check-label" for="exampleRadios1">
                                        Pria
                                    </label>
                                    <input id="gender" type="radio" class="form-check-input @error('gender') @enderror" name="gender" value="wanita">
                                    <label class="form-check-label" for="exampleRadios1">
                                        Wanita
                                    </label>
                                    </div>
                                    
                                    
                                </div>
                                    
                                    
                                    @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    
                                
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required placeholder="Password" autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" required placeholder="Konfirmasi Password" autocomplete="new-password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success btn-user btn-block">
                                Daftar
                            </button>
                            <hr>
                        </form>
                        <div class="text-center">
                            <a class="small" href="{{route('password.request')}}">Lupa Password?</a>
                        </div>
                        <div class="text-center">
                        @if (Route::has('login'))
                            <a href="{{ route('login') }}" class="small success">Sudah memiliki akun? Login!</a>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
