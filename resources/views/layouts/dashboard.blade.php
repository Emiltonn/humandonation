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
    <script src="https://kit.fontawesome.com/14b9ffab6c.js" crossorigin="anonymous"></script>

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
            <p class="float-rigth text-light" >(beta v0.1.1.0)</p>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- navbar -->
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url ('/ong/settings')}}">Olá, {{ auth()->user()->name }}</a>
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
                        <li >
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
        <footer class="footer mt-3" id="footer" >
            <div class="container">
                <div class="row">
                    <div class="col text-center mb-3">
<<<<<<< HEAD
                        <h4 class="mb-3">{{ __('Redes sociais')}}</h4>
                        <a href="#facebook" target= "_blank" rel="noreferrer noopener"><i class="fab fa-facebook fa-4x" ></i></a>
                        <a href="https://www.instagram.com/humandonation/" target= "_blank" rel="noreferrer noopener"><i class="fab fa-instagram fa-4x"></i></a>
                    </div>
                </div>
                <p class="text-center mb-0">&copy; 2020 - EmanuelMilton - <i class="fab fa-github fa-lg"></i> EMiltonn <p>
=======
                        <h4 class="mb-3">{{ __('Siga-nos nas Redes Sociais')}}</h4>
                        <a href="https://www.facebook.com/HumanDonation/" target= "_blank" rel="noreferrer noopener"><i class="fab fa-facebook fa-4x" ></i></a>
                        <a href="https://www.instagram.com/humandonation/" target= "_blank" rel="noreferrer noopener"><i class="fab fa-instagram fa-4x"></i></a>
                    </div>
                </div>
                <a href="https://github.com/Emiltonn" target= "_blank" rel="noreferrer noopener"><p class="text-center mb-0 text-white">&copy; 2020 - EmanuelMilton - <i class="fab fa-github fa-lg"></i> EMiltonn <p></a>
>>>>>>> 1815ba50bbc482edc374f9a6dc3021e488e77d80
            </div>
        </footer>
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
            $('#sidebar a').filter(function(){return this.href==location.href}).parent().addClass('active').siblings().removeClass('active')
        
        
            // jQueryMaskScripts
            $('.date').mask('00/00/0000');
            $('.time').mask('00:00:00');
            $('.date_time').mask('00/00/0000 00:00:00');
            $('.cep').mask('00000-000');
            $('.phone').mask('0000-0000');
            $('.phone_with_ddd').mask('(00) 0000-0000');
            $('.phone_us').mask('(000) 000-0000');
            $('.mixed').mask('AAA 000-S0S');
            $('.cpf').mask('000.000.000-00', {reverse: true});
            $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
            $('.money').mask('000.000.000.000.000,00', {reverse: true});
            $('.money2').mask("#.##0,00", {reverse: true});
            $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
                translation: {
                'Z': {
                    pattern: /[0-9]/, optional: true
                }
                }
            });
            $('.ip_address').mask('099.099.099.099');
            $('.percent').mask('##0,00%', {reverse: true});
            $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
            $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
            $('.fallback').mask("00r00r0000", {
                translation: {
                    'r': {
                    pattern: /[\/]/,
                    fallback: '/'
                    },
                    placeholder: "__/__/____"
                }
                });
            $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
            });
     
    </script>
    @yield('scripts')
</body>
</html>
