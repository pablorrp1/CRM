<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>CRM - @yield('title') </title>
    <link rel="icon" href={{ asset( 'images/icon/logo-min.png') }}>

    <!-- Fontfaces CSS -->
    <link href={{asset('css/font-face.css')}} rel="stylesheet" media="all">
    <link href={{ asset( 'propio/font-awesome-4.7/css/font-awesome.min.css') }} rel="stylesheet" media="all">
    <link href={{ asset( 'propio/font-awesome-5/css/fontawesome-all.min.css') }} rel="stylesheet" media="all">
    <link href={{ asset( 'propio/mdi-font/css/material-design-iconic-font.min.css') }} rel="stylesheet" media="all">
    <!-- Bootstrap CSS-->
    <link href={{ asset( 'propio/bootstrap-4.1/bootstrap.min.css') }} rel="stylesheet" media="all">
    <!-- propio CSS-->
    <link href={{ asset( 'propio/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }} rel="stylesheet" media="all">
    <link href={{ asset( 'propio/wow/animate.css" rel="stylesheet') }} media="all">
    <link href={{ asset( 'propio/css-hamburgers/hamburgers.min.css') }} rel="stylesheet" media="all">
    <link href={{ asset( 'propio/slick/slick.css" rel="stylesheet') }} media="all">
    <link href={{ asset( 'propio/select2/select2.min.css') }} rel="stylesheet" media="all">
    <link href={{ asset( 'propio/perfect-scrollbar/perfect-scrollbar.css') }} rel="stylesheet" media="all">
    @yield('include-css')
    <!-- Main CSS -->
    <link href={{ asset( 'propio/theme.css') }} rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper">
        @guest
    @include('includes.navbar') @yield('content') @else
    @include('includes-mobile.header')
        <div class="page-container">
    @include('includes.sidebar')
    @include('includes.navbar')
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        @endguest
    </div>

    <script src={{ asset( "propio/jquery-3.2.1.min.js") }}></script>
    <!-- Bootstrap JS-->
    <script src={{ asset( "propio/bootstrap-4.1/popper.min.js") }}></script>
    <script src={{ asset( "propio/bootstrap-4.1/bootstrap.min.js") }}></script>
    <!-- propio JS       -->
    <script src={{ asset( "propio/slick/slick.min.js") }}></script>
    <script src={{ asset( "propio/wow/wow.min.js") }}></script>
    <script src={{ asset( "propio/bootstrap-progressbar/bootstrap-progressbar.min.js") }}></script>
    <script src={{ asset( "propio/counter-up/jquery.waypoints.min.js") }}></script>
    <script src={{ asset( "propio/counter-up/jquery.counterup.min.js") }}></script>
    <script src={{ asset( "propio/perfect-scrollbar/perfect-scrollbar.js") }}></script>
    <script src={{ asset( "propio/chartjs/Chart.bundle.min.js") }}></script>
    <script src={{ asset( "propio/select2/select2.min.js") }}></script>
    @yield('includes-js')

    <script src={{ asset( "js/main.js") }}></script>
</body>

</html>