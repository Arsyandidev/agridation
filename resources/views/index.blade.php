<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')

</head>

<body>
    @include('layouts.header')

    <section id="services" class="section">
        <div class="container">
            <img class="left-leaf-image img-fluid" src="{{ asset('upage/img/img-leaf.png') }}">

            <h2 style="margin-top: 140px">TEMA AGRIDATION 2021</h2>
            <h3 class="mb-5">Inovasi Pertanian Dalam Upaya Revolusi 4.0 dan Society 5.0</h3>

            <div class="container-iframe">
                <!--
                <iframe class="responsive-iframe" src="{{ asset('upage/video/teaser.mp4') }}"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>-->
                <iframe class="responsive-iframe" src="https://www.youtube.com/embed/J0Bpn2vOjSU?&autoplay=1" title="YouTube video player" frameborder="0" allow="autoplay; accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

        </div>
    </section>

    <section id="webinar" style="padding-top: 100px">
        <div class="container">

            <h2>JANGAN LEWATKAN!</h2>
            <h3>"Peranan Teknologi sebagai Mekanisasi Pertanian dalam Mendukung Petani Milenial"</h3>

            <div class="row">
                <div class="col-lg-6 col-md-12 pt-70 pl-4 pr-4">
                    <div class="business-item-img">
                        <img src="{{ asset('upage/img/kilas/12.JPG') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 pl-4">
                    <div class="business-item-info">
                        <p>Webinar Nasional Agridation hadir kembali
                            di tahun 2021 dengan pembicara yang luar
                            biasa dan tentunya berpengalaman di
                            bidang Pertanian.</p>

                        <div class="row">
                            <div class="col-6">
                                <img width="24" src="{{ asset('upage/img/img-ticket.png') }}" alt="">
                                <span class="ml-2" style="display: inline; font-weight: 600">Harga Tiket Free</span>
                            </div>
                            <div class="col-6">
                                <img width="24" src="{{ asset('upage/img/img-calendar.png') }}" alt="">
                                <span class="ml-2" style="display: inline; font-weight: 600">26 September 2021</span>
                            </div>
                        </div>

                        <a class="btn btn-common mt-4" href="{{ route('webinar') }}">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section id="testimonial" class="section">
        <div class="container right-position"> -->
            <!-- Start Row -->
            <!-- <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="video-promo-content text-center">

                        <a id="play-video" class="video-play-button video-popup"
                            href="https://www.youtube.com/watch?v=Y4fodpIwal8&list=RDXCElIIYx_8s&index=13">
                            <span></span>
                        </a>

                    </div>
                </div>
            </div> -->
            <!-- End Row -->
            <!-- Start Row -->
            <!-- <div class="row justify-content-center testimonial-area">
                <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 pr-20 pl-20"
                    style="overflow: hidden;padding-bottom: 60px">
                    <div id="client-testimonial" class="text-center owl-carousel">
                        <div class="item">
                            <div class="testimonial-item">
                                <div class="content-inner">
                                    <h2>Tiga Pembicara Hebat</h2>
                                    <p class="description">Halo sobat Agri!
                                        Webinar Nasional Agridation
                                        kembali hadir di tahun 2021!
                                        Tentunya berbeda dengan tahun
                                        sebelumnya dengan pembicara yang
                                        luar biasa dan tentunya berpengalaman
                                        di bidang Pertanian.</p>
                                </div>
                                <a class="btn btn-common mt-4" href="{{ route('register') }}">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- End Row -->
        <!-- </div>
    </section> -->

    <section id="workshop" style="padding-top: 100px">
        <div class="container">

            <h2>WORKSHOP AGRIDATION 2021</h2>
            <h3>"Unggul dengan Budidaya Tanaman Organik Microgreens"</h3>

            <div class="row">
                <div class="col-lg-6 col-md-12 pt-70 pl-4 pr-4">
                    <div class="business-item-img">
                        <img src="{{ asset('upage/img/kilas/14.JPG') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 pl-4">
                    <div class="business-item-info">
                        <p>Webinar Nasional Agridation hadir kembali
                            di tahun 2021 dengan pembicara yang luar
                            biasa dan tentunya berpengalaman di
                            bidang Pertanian.</p>

                        <div class="row">
                            <div class="col-6">
                                <img width="24" src="{{ asset('upage/img/img-ticket.png') }}" alt="">
                                <span class="ml-2" style="display: inline; font-weight: 600">Harga Tiket Rp
                                    30.000</span>
                            </div>
                            <div class="col-6">
                                <img width="24" src="{{ asset('upage/img/img-calendar.png') }}" alt="">
                                <span class="ml-2" style="display: inline; font-weight: 600">26 September 2021</span>
                            </div>
                        </div>

                        <a class="btn btn-common mt-4" href="{{route('workshop')}}">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="lomba" class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="features-text section-header text-center">
                        <div>
                            <h2 class="section-title">Agridation Competition</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row featured-bg" style="text-align: center">
                <div class="col-lg-4 col-md-4 col-xs-12 p-2">
                    <div style="background-image: url('upage/img/lomba/lkti_nt.png')" 
                        class="feature-item featured-border1">
                        <div class="feature-info float-left">
                            <h4>Karya Tulis</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 p-2">
                    <div style="background-image: url('upage/img/lomba/pod_nt.png')"
                        class="feature-item featured-border2">
                        <div class="feature-info float-left">
                            <h4>Podcast</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 p-2">
                    <div style="background-image: url('upage/img/lomba/fotograp_nt.png')"
                        class="feature-item featured-border1">
                        <div class="feature-info float-left">
                            <h4>Fotografi</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-12"></div>
                <div class="col-lg-4 col-md-4 col-xs-12 p-2">
                    <div style="background-image: url('upage/img/lomba/pos_nt.png')"
                        class="feature-item featured-border1">
                        <div class="feature-info float-left">
                            <h4>Poster</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 p-2">
                    <div style="background-image: url('upage/img/lomba/crevid_nt.png')"
                        class="feature-item featured-border2">
                        <div class="feature-info float-left">
                            <h4>Creative Video</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 48px">
                <div class="col-12" style="text-align: center;">
                    <p>Petunjuk Teknis (1Mb)</p>
                    <a class="btn btn-common mt-4" href="https://drive.google.com/file/d/1p3IJo5es-7lLq2j3VJErObreUs7aXgh_/view?usp=sharing">Download </a>
                </div>
            </div>
        </div>
    </section>

    <section style="margin-top: 120px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="features-text section-header text-center">
                        <div>
                            <h2 class="section-title">Competition Timeline</h2>
                        </div>
                    </div>
                </div>
            </div>
            @php
                $timeline_items = [
                    [
                        'date' => '24 Mei 2021',
                        'title' => 'Publikasi Perdana',
                    ],
                    [
                        'date' => '10 Juli 2021 – 13 Agustus 2021',
                        'title' => 'Pendaftaran Lomba Non-LKTI (I) dan Workshop',
                    ],
                    [
                        'date' => '10 Juli – 2 September 2021',
                        'title' => 'Pendaftaran Lomba LKTI',
                    ],
                    [
                        'date' => '4 September 2021',
                        'title' => 'Technical Meeting LKTI',
                    ],
                    [
                        'date' => '4 - 13 September 2021',
                        'title' => 'Pengumpulan Naskah LKTI',
                    ],
                    [
                        'date' => '14 Agustus – 3 September 2021',
                        'title' => 'Pendaftaran Lomba Non-LKTI (II) dan Workshop',
                    ],
                    [
                        'date' => '14 Agustus & 4 September 2021',
                        'title' => 'Technical Meeting Lomba Non-LKTI',
                    ],
                    [
                        'date' => '4 – 19 September 2021',
                        'title' => 'Pembukaan Pengumpulan Karya Lomba Non-LKTI',
                    ],
                    [
                        'date' => '13 – 18 September 2021',
                        'title' => 'Seleksi Berkas LKTI',
                    ],
                    [
                        'date' => '19 September 2021',
                        'title' => 'Pengumuman 5 Besar LKTI',
                    ],
                    [
                        'date' => '20 September 2021',
                        'title' => 'Upload Karya (Poster, Fotografi, Creative Video, dan Podcast)',
                    ],
                    [
                        'date' => '20 – 24 September 2021',
                        'title' => 'Penilaian Lomba Non-LKTI',
                    ],
                    [
                        'date' => '20 - 25 September 2021',
                        'title' => 'Pengumpulan PPT 5 Besar LKTI',
                    ],
                    [
                        'date' => '26 September 2021',
                        'title' => 'Webinar, Workshop, Presentasi LKTI dan Pengumuman Juara Seluruh Perlombaan',
                    ],
                ];
            @endphp
            <div class="row">
                <div class="col-lg-12">
                    <div id="timeline">
                        @foreach ($timeline_items as $timeline_key => $item)
                            @if ($timeline_key % 2 == 0)
                                <div class="timeline-item">
                                    <div class="timeline-icon">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="21px"
                                            height="20px" viewBox="0 0 21 20" enable-background="new 0 0 21 20"
                                            xml:space="preserve">
                                            <path fill="#FFFFFF"
                                                d="M19.998,6.766l-5.759-0.544c-0.362-0.032-0.676-0.264-0.822-0.61l-2.064-4.999
                                                c-0.329-0.825-1.5-0.825-1.83,0L7.476,5.611c-0.132,0.346-0.462,0.578-0.824,0.61L0.894,6.766C0.035,6.848-0.312,7.921,0.333,8.499
                                                l4.338,3.811c0.279,0.246,0.395,0.609,0.314,0.975l-1.304,5.345c-0.199,0.842,0.708,1.534,1.468,1.089l4.801-2.822
                                                c0.313-0.181,0.695-0.181,1.006,0l4.803,2.822c0.759,0.445,1.666-0.23,1.468-1.089l-1.288-5.345
                                                c-0.081-0.365,0.035-0.729,0.313-0.975l4.34-3.811C21.219,7.921,20.855,6.848,19.998,6.766z" />
                                        </svg>

                                    </div>
                                    <div class="timeline-content">
                                        <h2>{{ $item['date'] }}</h2>
                                        <p>
                                            {{ $item['title'] }}
                                        </p>
                                    </div>
                                </div>
                            @else
                                <div class="timeline-item">
                                    <div class="timeline-icon">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="21px"
                                            height="20px" viewBox="0 0 21 20" enable-background="new 0 0 21 20"
                                            xml:space="preserve">
                                            <path fill="#FFFFFF"
                                                d="M19.998,6.766l-5.759-0.544c-0.362-0.032-0.676-0.264-0.822-0.61l-2.064-4.999
                                                c-0.329-0.825-1.5-0.825-1.83,0L7.476,5.611c-0.132,0.346-0.462,0.578-0.824,0.61L0.894,6.766C0.035,6.848-0.312,7.921,0.333,8.499
                                                l4.338,3.811c0.279,0.246,0.395,0.609,0.314,0.975l-1.304,5.345c-0.199,0.842,0.708,1.534,1.468,1.089l4.801-2.822
                                                c0.313-0.181,0.695-0.181,1.006,0l4.803,2.822c0.759,0.445,1.666-0.23,1.468-1.089l-1.288-5.345
                                                c-0.081-0.365,0.035-0.729,0.313-0.975l4.34-3.811C21.219,7.921,20.855,6.848,19.998,6.766z" />
                                        </svg>

                                    </div>
                                    <div class="timeline-content right">
                                        <h2>{{ $item['date'] }}</h2>
                                        <p>
                                            {{ $item['title'] }}
                                        </p>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="kilasbalik">
        <div class="container-fluid right-position">
            <!-- Start Row -->
            <div class="row gradient-bg">
                <div class="col-lg-12">
                    <div class="showcase-text section-header text-center">
                        <div>
                            <h2 class="section-title">Kilas Balik</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->
            <!-- Start Row -->
            <div class="row justify-content-center showcase-area">
                <div class="col-lg-12 col-md-12 col-xs-12 pr-0">
                    <div class="showcase-slider owl-carousel">
                        <div class="item">
                            <div class="screenshot-thumb">
                                <img src="{{ asset('upage/img/kilas/1.JPG') }}" class="img-fluid" alt="" />
                                <div class="hover-content text-center">
                                    <div class="fancy-table">
                                        <div class="table-cell">
                                            <div class="single-text">
                                                <p>Agridation 2020</p>
                                                <h5>DDM</h5>
                                            </div>
                                            <div class="zoom-icon">
                                                <a class="lightbox" href="{{ asset('upage/img/kilas/1.JPG') }}"><i
                                                        class="lni-zoom-in"></i></a>
                                                <a href="#"><i class="lni-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="screenshot-thumb">
                                <img src="{{ asset('upage/img/kilas/2.JPG') }}" class="img-fluid" alt="" />
                                <div class="hover-content text-center">
                                    <div class="fancy-table">
                                        <div class="table-cell">
                                            <div class="single-text">
                                                <p>Agridation 2020</p>
                                                <h5>DDM</h5>
                                            </div>
                                            <div class="zoom-icon">
                                                <a class="lightbox" href="{{ asset('upage/img/kilas/2.JPG') }}"><i
                                                        class="lni-zoom-in"></i></a>
                                                <a href="#"><i class="lni-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="screenshot-thumb">
                                <img src="{{ asset('upage/img/kilas/3.JPG') }}" class="img-fluid" alt="" />
                                <div class="hover-content text-center">
                                    <div class="fancy-table">
                                        <div class="table-cell">
                                            <div class="single-text">
                                                <p>Agridation 2020</p>
                                                <h5>DDM</h5>
                                            </div>
                                            <div class="zoom-icon">
                                                <a class="lightbox" href="{{ asset('upage/img/kilas/3.JPG') }}"><i
                                                        class="lni-zoom-in"></i></a>
                                                <a href="#"><i class="lni-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="screenshot-thumb">
                                <img src="{{ asset('upage/img/kilas/4.JPG') }}" class="img-fluid" alt="" />
                                <div class="hover-content text-center">
                                    <div class="fancy-table">
                                        <div class="table-cell">
                                            <div class="single-text">
                                                <p>Agridation 2020</p>
                                                <h5>DDM</h5>
                                            </div>
                                            <div class="zoom-icon">
                                                <a class="lightbox" href="{{ asset('upage/img/kilas/4.JPG') }}"><i
                                                        class="lni-zoom-in"></i></a>
                                                <a href="#"><i class="lni-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="screenshot-thumb">
                                <img src="{{ asset('upage/img/kilas/5.JPG') }}" class="img-fluid" alt="" />
                                <div class="hover-content text-center">
                                    <div class="fancy-table">
                                        <div class="table-cell">
                                            <div class="single-text">
                                                <p>Agridation 2020</p>
                                                <h5>DDM</h5>
                                            </div>
                                            <div class="zoom-icon">
                                                <a class="lightbox" href="{{ asset('upage/img/kilas/5.JPG') }}"><i
                                                        class="lni-zoom-in"></i></a>
                                                <a href="#"><i class="lni-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="screenshot-thumb">
                                <img src="{{ asset('upage/img/kilas/6.png') }}" class="img-fluid" alt="" />
                                <div class="hover-content text-center">
                                    <div class="fancy-table">
                                        <div class="table-cell">
                                            <div class="single-text">
                                                <p>Agridation 2020</p>
                                                <h5>DDM</h5>
                                            </div>
                                            <div class="zoom-icon">
                                                <a class="lightbox" href="{{ asset('upage/img/kilas/6.png') }}"><i
                                                        class="lni-zoom-in"></i></a>
                                                <a href="#"><i class="lni-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="screenshot-thumb">
                                <img src="{{ asset('upage/img/kilas/7.png') }}" class="img-fluid" alt="" />
                                <div class="hover-content text-center">
                                    <div class="fancy-table">
                                        <div class="table-cell">
                                            <div class="single-text">
                                                <p>Agridation 2020</p>
                                                <h5>DDM</h5>
                                            </div>
                                            <div class="zoom-icon">
                                                <a class="lightbox" href="{{ asset('upage/img/kilas/7.png') }}"><i
                                                        class="lni-zoom-in"></i></a>
                                                <a href="#"><i class="lni-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="screenshot-thumb">
                                <img src="{{ asset('upage/img/kilas/8.png') }}" class="img-fluid" alt="" />
                                <div class="hover-content text-center">
                                    <div class="fancy-table">
                                        <div class="table-cell">
                                            <div class="single-text">
                                                <p>Agridation 2020</p>
                                                <h5>DDM</h5>
                                            </div>
                                            <div class="zoom-icon">
                                                <a class="lightbox" href="{{ asset('upage/img/kilas/8.png') }}"><i
                                                        class="lni-zoom-in"></i></a>
                                                <a href="#"><i class="lni-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="screenshot-thumb">
                                <img src="{{ asset('upage/img/kilas/9.JPG') }}" class="img-fluid" alt="" />
                                <div class="hover-content text-center">
                                    <div class="fancy-table">
                                        <div class="table-cell">
                                            <div class="single-text">
                                                <p>Agridation 2020</p>
                                                <h5>DDM</h5>
                                            </div>
                                            <div class="zoom-icon">
                                                <a class="lightbox" href="{{ asset('upage/img/kilas/9.JPG') }}"><i
                                                        class="lni-zoom-in"></i></a>
                                                <a href="#"><i class="lni-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="screenshot-thumb">
                                <img src="{{ asset('upage/img/kilas/10.JPG') }}" class="img-fluid" alt="" />
                                <div class="hover-content text-center">
                                    <div class="fancy-table">
                                        <div class="table-cell">
                                            <div class="single-text">
                                                <p>Agridation 2020</p>
                                                <h5>DDM</h5>
                                            </div>
                                            <div class="zoom-icon">
                                                <a class="lightbox"
                                                    href="{{ asset('upage/img/kilas/10.JPG') }}"><i
                                                        class="lni-zoom-in"></i></a>
                                                <a href="#"><i class="lni-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="screenshot-thumb">
                                <img src="{{ asset('upage/img/kilas/11.JPG') }}" class="img-fluid" alt="" />
                                <div class="hover-content text-center">
                                    <div class="fancy-table">
                                        <div class="table-cell">
                                            <div class="single-text">
                                                <p>Agridation 2020</p>
                                                <h5>DDM</h5>
                                            </div>
                                            <div class="zoom-icon">
                                                <a class="lightbox"
                                                    href="{{ asset('upage/img/kilas/11.JPG') }}"><i
                                                        class="lni-zoom-in"></i></a>
                                                <a href="#"><i class="lni-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="screenshot-thumb">
                                <img src="{{ asset('upage/img/kilas/12.JPG') }}" class="img-fluid" alt="" />
                                <div class="hover-content text-center">
                                    <div class="fancy-table">
                                        <div class="table-cell">
                                            <div class="single-text">
                                                <p>Agridation 2020</p>
                                                <h5>DDM</h5>
                                            </div>
                                            <div class="zoom-icon">
                                                <a class="lightbox"
                                                    href="{{ asset('upage/img/kilas/12.JPG') }}"><i
                                                        class="lni-zoom-in"></i></a>
                                                <a href="#"><i class="lni-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="screenshot-thumb">
                                <img src="{{ asset('upage/img/kilas/13.JPG') }}" class="img-fluid" alt="" />
                                <div class="hover-content text-center">
                                    <div class="fancy-table">
                                        <div class="table-cell">
                                            <div class="single-text">
                                                <p>Agridation 2020</p>
                                                <h5>DDM</h5>
                                            </div>
                                            <div class="zoom-icon">
                                                <a class="lightbox"
                                                    href="{{ asset('upage/img/kilas/13.JPG') }}"><i
                                                        class="lni-zoom-in"></i></a>
                                                <a href="#"><i class="lni-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="screenshot-thumb">
                                <img src="{{ asset('upage/img/kilas/14.JPG') }}" class="img-fluid" alt="" />
                                <div class="hover-content text-center">
                                    <div class="fancy-table">
                                        <div class="table-cell">
                                            <div class="single-text">
                                                <p>Agridation 2020</p>
                                                <h5>DDM</h5>
                                            </div>
                                            <div class="zoom-icon">
                                                <a class="lightbox"
                                                    href="{{ asset('upage/img/kilas/14.JPG') }}"><i
                                                        class="lni-zoom-in"></i></a>
                                                <a href="#"><i class="lni-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section id="team" class="section">
        <div class="container"> -->
            <!-- Start Row -->
            <!-- <div class="row">
                <div class="col-lg-12">
                    <div class="team-text section-header text-center">
                        <div>
                            <h2 class="section-title">Sponsored By</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="single-team">
                        <div class="team-thumb">
                            <img src="{{ asset('upage/img/logos/logo-google.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="single-team">
                        <div class="team-thumb">
                            <img src="{{ asset('upage/img/logos/logo-amazon.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="single-team">
                        <div class="team-thumb">
                            <img src="{{ asset('upage/img/logos/logo-tokopedia.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="single-team">
                        <div class="team-thumb">
                            <img src="{{ asset('upage/img/logos/logo-gojek.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

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
