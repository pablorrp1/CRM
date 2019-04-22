<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>CRM - @yield('title') </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="assetsheet">
        <link rel="icon" href={{ asset('images/icon/logo-min.png') }}>

        <link href={{ asset('css/theme.css') }} rel="stylesheet">
        <link href={{ asset('css/font-face.css') }} rel="stylesheet">
        <!-- Fontfaces CSS-->
        <link href={{ asset('vendor/font-awesome-4.7/css/font-awesome.min.css') }} rel="stylesheet">
        <link href={{ asset('vendor/font-awesome-5/css/fontawesome-all.min.css') }} rel="stylesheet">
        <link href={{ asset('vendor/mdi-font/css/material-design-iconic-font.min.css') }} rel="stylesheet">

        <!-- Bootstrap CSS-->
        <link href={{ asset('vendor/bootstrap-4.1/bootstrap.min.css') }} rel="stylesheet">

        <style>
                html, body {
                    background-color: #fff;
                    color: #000000;
                    font-family: 'Nunito', sans-serif;
                    font-weight: 200;
                    height: 100vh;
                    margin: 0;
                }
    
                .full-height {
                    height: 100vh;
                }
    
                .flex-center {
                    align-items: center;
                    display: flex;
                    justify-content: center;
                }
    
                .position-ref {
                    position: relative;
                }
    
                .top-right {
                    position: absolute;
                    right: 10px;
                    top: 18px;
                }
    
                .content {
                    text-align: center;
                }
    
                .title {
                    font-size: 84px;
                }
    
                .links > a {
                    color: #636b6f;
                    padding: 0 25px;
                    font-size: 13px;
                    font-weight: 600;
                    letter-spacing: .1rem;
                    text-decoration: none;
                    text-transform: uppercase;
                }
    
                .m-b-md {
                    margin-bottom: 30px;
                }
            </style>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Inicio</a>
                    @else
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @endauth
                </div>
            @endif
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </body>

    <footer>
        <script src={{ asset("vendor/jquery-3.3.1.min.js") }}></script>
        <!-- Bootstrap JS-->
        <script src={{ asset("vendor/bootstrap-4.1/popper.min.js") }}></script>
    </footer>
</html>
