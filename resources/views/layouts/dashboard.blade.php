<!-- NAVBAR and SIDEBAR -->
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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Imports -->
    <link rel="stylesheet" href="{{ asset ('site/dashboard.css') }}">


    <!-- Font Awesome JS -->
    <script src="https://kit.fontawesome.com/0854c83c54.js" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="{{ asset ('site/img/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{ asset ('site/img/favicon.ico')}}" type="image/x-icon">
    
    @yield('styles')
</head>
<body id="body">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #0e56a2" id="menuPrincipal">
            <a class="navbar-brand ml-sm-5" href="{{ url ('/')}}">
                <img src="{{ asset ('site/img/logo-humandonation.png') }}" height="60vh" alt="logo-human-donation">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- navbar -->
            <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        {{-- <a class="nav-link active" href="#">Olá, nome</a> --}}
                        <a class="nav-link active" href="#">Olá, {{ auth()->user()->name }}</a>
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
        <main>
            <div class="wrapper">
                <!-- Sidebar  -->
                <nav id="sidebar">
                    <ul class="list-unstyled components">
                        <li class="active">
                            <a href="{{ url ('/ong')}}">
                                <i class="fas fa-home"></i>
                                Página Inicial
                            </a>
                        </li>
                        <li>
                            <a href="{{ url ('/ong/grantees')}}">
                                <i class="fas fa-users"></i>
                                Donatários Cadastrados
                            </a>
                        </li>
                        <li>
                            <a href="{{ url ('/ong/donations')}}">
                                <i class="fas fa-box"></i>
                                Confirmação de doações
                            </a>
                        </li>
                        <li>
                            <a href="{{ url ('/ong/volunteers')}}">
                                <i class="fas fa-hands-helping"></i>
                                Voluntários
                            </a>
                        </li>
                        <li>
                            <a href="{{ url ('/ong/support')}}">
                                <i class="fas fa-headset"></i>
                                Suporte
                            </a>
                        </li>
                        <li>
                            <a href="{{ url ('/ong/settings')}}">
                                <i class="fas fa-tools"></i>
                                Configurações
                            </a>
                        </li>
                    </ul>
                </nav>
                @yield('content')
            </div>
        </main>
    </div>
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    @yield('scripts')
</body>
</html>
