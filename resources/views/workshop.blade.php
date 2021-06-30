<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
    <link rel="stylesheet" href="{{ asset('upage/css/custom.css') }}">
</head>

<body>
    <header id="home" class="hero-area">
        <div class="overlay">
            <span></span>
            <span></span>
        </div>
        <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
            <div class="container">
                <a href="{{ route('home') }}" class="navbar-brand">
                    <img width="220" src="{{ asset('upage/img/logo.png') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="lni-menu"></i>
                </button>
            </div>
        </nav>
    </header>

    <section>
        <div class="w-100 pt-180 pb-180 page-title-wrap text-center black-layer opc5 position-relative">
            <div class="fixed-bg" style="background-image: url(upage/img/kilas/12.JPG);"></div>
            <div class="container">
                <div class="page-title-inner d-inline-block">
                    <h1 class="mb-0">Workshop Detail</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" title="">Home</a></li>
                        <li class="breadcrumb-item active">Workshop Detail</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-140 pb-120 position-relative">
            <div class="container">
                <div class="event-detail w-100">
                    <div class="event-detail-info w-100">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-sm-12 col-lg-6">
                                <span class="thm-clr d-block">Join Us <strong></strong></span>
                                <h2 class="mv-0">Unggul dengan Budidaya Tanaman Organik Microgreens</h2>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-6">
                                <div class="about-info-wrap w-100">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <div class="about-info w-100">
                                                <i class="thm-clr flaticon-tickets"></i>
                                                <div class="about-info-inner">
                                                    <span>Tickets Information:</span>
                                                    <p class="mb-0">Rp. 30.000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <div class="about-info w-100">
                                                <i class="thm-clr far fa-calendar-alt"></i>
                                                <div class="about-info-inner">
                                                    <span>Event</span>
                                                    <p class="mb-0">26 September 2021</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="event-detail-img position-relative w-100">
                            <img class="img-fluid w-100" src="{{ asset('upage/img/kilas/12.JPG') }}"
                                alt="Event Detail Image">
                        </div>
                    </div>
                    <div class="event-detail-content position-relative w-100">
                        <div class="event-detail-desc position-relative w-100">
                            <h4 class="mb-0">Overview</h4>
                            <p class="mb-0">Kegiatan ini akan dilakukan secara daring, dengan metode
                                konferensi video, diadakan menjadi dua sesi yang berbeda topik
                                pembahasan. Webinarditargetkandapatmeningkatkanpengetahuan
                                dan kesadaran milenial terhadap pentingnya pertanian untuk
                                mencapai Indonesia emas. Sedangkan workshop diharapkan
                                menjadi forum yang dapat meningkatkan hard skill dan soft skill
                                pada bidang pertanian.
                            </p>
                            <ul class="mb-0 list-unstyled">
                                <li>E-Sertifikat</li>
                                <li>Ilmu yang bermanfaat</li>
                                <li>Dapat berinteraksi dengan banyak orang</li>
                                <li>Hemat biaya dan sangat fleksibel.</li>
                            </ul>

                        </div>
                        <!--
                        <div class="event-detail-speaker position-relative w-100">
                            <h4 class="mb-0">Pembicara</h4>
                            <div class="speaker-inner pl-0 w-100">
                                <div class="row mrg50">
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                        <div class="speaker-box position-relative mb-40 w-100 overflow-hidden">
                                            <img class="img-fluid w-100" src="" alt="Speaker Image 1">
                                            <div class="speaker-info position-absolute">
                                                <h3 class="mb-0 text-white"><a href="#"></a></h3>
                                                <span class="d-block"></span>
                                            </div>
                                            <h3 class="mb-0 text-white position-absolute"></h3>
                                            <div class="speaker-social position-absolute">
                                                <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                                            </div>
                                            <a class="position-absolute" href="#" title="">
                                                <i class="fas fa-expand-alt"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                        <div class="speaker-box position-relative mb-40 w-100 overflow-hidden">
                                            <img class="img-fluid w-100" src="" alt="Speaker Image 2">
                                            <div class="speaker-info position-absolute">
                                                <h3 class="mb-0 text-white"><a href="#"></a></h3>
                                                <span class="d-block"></span>
                                            </div>
                                            <h3 class="mb-0 text-white position-absolute"></h3>
                                            <div class="speaker-social position-absolute">
                                                <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                                            </div>
                                            <a class="position-absolute" href="#" title="">
                                                <i class="fas fa-expand-alt"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                        <div class="speaker-box position-relative mb-40 w-100 overflow-hidden">
                                            <img class="img-fluid w-100" src="" alt="Speaker Image 3">
                                            <div class="speaker-info position-absolute">
                                                <h3 class="mb-0 text-white"><a href="#"></a></h3>
                                                <span class="d-block"></span>
                                            </div>
                                            <h3 class="mb-0 text-white position-absolute"></h3>
                                            <div class="speaker-social position-absolute">
                                                <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                                            </div>
                                            <a class="position-absolute" href="#" title="">
                                                <i class="fas fa-expand-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                        <div class="event-detail-getintouch position-relative w-100">
                            <h4 class="mb-0">Join Now!!</h4>
                            <div class="event-detail-getintouch-inner w-100">
                                <p class="mb-0">Daftar Sebelum 3 September 2021.</p>
                                @if (Route::has('register'))
                                <a class="thm-btn fill-btn" href="{{ route('register') }}">
                                    Daftar <i class="flaticon-trajectory"></i>
                                    <span></span>
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')

    <a href="#" class="back-to-top">
        <i class="lni-chevron-up"></i>
    </a>

    <div id="preloader">
        <div class="loader" id="loader-1"></div>
    </div>
    @include('layouts.scripts')
</body>

</html>