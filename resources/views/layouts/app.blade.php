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
        <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #0e56a2" id="menuPrincipal">
            <a class="navbar-brand ml-sm-5" href="{{ url('/') }}">
                <img src="{{ asset ('site/img/logo-humandonation.png')}}" height="36" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Sobre <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Instituições</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Suporte</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-lg-3">
                    @guest
                        <li class="nav-item mr-lg-3">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="btn btn-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <a class="btn btn-primary" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @endguest

                </ul>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <footer class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-6 justify-content-center">
                    <p class="mb-0">Redes sociais</p>
                    <i class="fab fa-facebook" style="margin-left: 16px; margin-right: 15px;"></i>
                    <i class="fab fa-instagram"></i>
                </div>
                <div class="col-6">
                    <p class="mb-0">Assine nosso Newsletter</p>
                    <form class="form-horizontal">
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                              <span class="input-group-text" id="basic-addon2"><i class="fas fa-rss-square"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="{{ __('Seu Email')}}" aria-label="{{ __('Seu Email')}}" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-secondary" type="button"><i class="fas fa-paper-plane"></i></button>
                            </div>
                        </div>
                        {{-- <div class="form-group has-warning has-feedback">
                            <div class="col-12 p-0">
                                <input type="text" class="form-control">
                                <span class="form-control-feedback"><span class="material-icons text-primary">send</span></span>
                            </div>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </footer>
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
    @yield('scripts')

</body>

</html>
