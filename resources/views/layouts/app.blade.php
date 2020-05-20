<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Humandonation') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Font Awesome JS -->
    <script src="https://kit.fontawesome.com/14b9ffab6c.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset ('site/img/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{ asset ('site/img/favicon.ico')}}" type="image/x-icon">
    
    @yield('styles')
</head>
<body id="body">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #0e56a2;margin-bottom: 3vh;" id="menuPrincipal">
            <a class="navbar-brand ml-sm-5" href="{{ url ('/')}}">
                <img src="{{ asset ('site/img/logo-humandonation.png') }}" height="60vh" alt="logo-human-donation">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- navbar -->
            <div class="collapse navbar-collapse" id="navbarsExample04">
                @if (Route::has('login'))
                <ul class="navbar-nav ml-auto">
                    @auth
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/home') }}">{{ __('Home')}}</a>
                    </li>
                </ul>
                @else
                <ul class="navbar-nav ml-lg-3">
                    <li class="nav-item mr-lg-3">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="btn btn-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @endauth
                </ul>
                @endif
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <footer class="footer mt-3" id="footer" >
        <div class="container">
            <div class="row">
                <div class="col text-center mb-3">
                    <h4 class="mb-3">{{ __('Redes sociais')}}</h4>
                    <a href="#facebook" target= "_blank" rel="noreferrer noopener"><i class="fab fa-facebook fa-4x" ></i></a>
                    <a href="https://www.instagram.com/humandonation/" target= "_blank" rel="noreferrer noopener"><i class="fab fa-instagram fa-4x"></i></a>
                </div>
            </div>
            <p class="text-center mb-0">&copy; 2020 - EmanuelMilton - <i class="fab fa-github fa-lg"></i> EMiltonn <p>
        </div>
    </footer>
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
    @yield('scripts')

</body>

</html>
