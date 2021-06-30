<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Agridation 2021</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('upage/img/2.png') }}" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('upage/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('upage/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('upage/css/LineIcons.css') }}">
    <link rel="stylesheet" href="{{ asset('upage/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('upage/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('upage/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('upage/css/nivo-lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('upage/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('upage/css/responsive.css') }}">

    {{-- Favicons --}}
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('upage/img/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('upage/img/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('upage/img/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('upage/img/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('upage/img/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('upage/img/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('upage/img/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('upage/img/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('upage/img/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('upage/img/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('upage/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('upage/img/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('upage/img/favicon/favicon-16x16.png') }}">
    @stack('scripts-head')
</head>
<body>
    
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="{{ asset('upage/js/jquery-min.js') }}"></script>
    <script src="{{ asset('upage/js/popper.min.js') }}"></script>
    <script src="{{ asset('upage/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('upage/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('upage/js/jquery.nav.js') }}"></script>
    <script src="{{ asset('upage/js/scrolling-nav.js') }}"></script>
    <script src="{{ asset('upage/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('upage/js/nivo-lightbox.js') }}"></script>
    <script src="{{ asset('upage/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('upage/js/main.js') }}"></script>

</body>
</html>
