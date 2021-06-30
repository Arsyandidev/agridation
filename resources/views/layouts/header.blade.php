<header id="home" class="hero-area">
    <div class="overlay">
        <span></span>
        <span></span>
    </div>
    <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand"><img width="220"
                    src="{{ asset('upage/img/logo.png') }}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="lni-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto w-100 justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#webinar">Webinar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#workshop">Workshop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#lomba">Lomba</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#kilasbalik">Kilas Balik</a>
                    </li>
                    <li class="nav-item">
                        @if(Route::has('login'))
                            <a class="btn btn-singin" href="{{ route('login') }}">Login</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row space-100">
            <div class="col-lg-8 col-md-12 col-xs-12">
                <div class="contents">
                    <h3 class="head-title">SELAMAT DATANG DI SITUS</h3>
                    <h1>AGRIDATION 2021</h1>
                    <h4>Agricultural Day Competition</h4>
                    <p>AGRIDATION adalah kegiatan yang bertujuan untuk meningkatkan kreativitas dan inovasi di bidang
                        pertanian dalam rangka memperingati Hari Tani Nasional.</p>
                    <div class="header-button">
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-border-filled">Daftar Akun</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <img class="hero-image" src="{{ asset('upage/img/img-hero.png') }}">

</header>