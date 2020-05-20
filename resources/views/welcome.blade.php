<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Humandonation') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" ></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Imports -->
        <link rel="stylesheet" href="{{ asset ('site/dashboard.css') }}">


        <!-- Font Awesome JS -->
        <script src="https://kit.fontawesome.com/14b9ffab6c.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


        <link rel="shortcut icon" href="{{ asset ('site/img/favicon.ico')}}" type="image/x-icon">
        <link rel="icon" href="{{ asset ('site/img/favicon.ico')}}" type="image/x-icon">

        <style>
            .btn-quero-doar {
                width: 100%;
                max-width: 250px;
                height: 45px;
                font-size: 18px;
                vertical-align: middle;
                padding-top: 9px;
            }
            footer p{
                color: white;
            }
            #partners p{
                padding: 5px;
                padding-bottom: 0;
            }
            section h1 {
                padding-bottom: 1em;
            }
            
        </style>

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

    </head>
    <body>
        <section class="container h-100" id="home">
            <div class="row">
                <div class="col-md-7 justify-content-center text-center mb-auto my-md-auto">
                    <h1 class="font-weight-bolder h1">Conectando pessoas, transformando vidas.</h2>
                    <h3 class="font-weight- mb-5 h3">Faça sua doação de um jeito rápido, fácil e simples!</h3>
                    <div class="col-md-5 d-flex d-md-none">
                        <img src="{{ asset ('site/img/pessoas2.png')}}" alt="" class="img-fluid w-100 my-auto">
                    </div>
                    <a href="{{ route('login') }}" class="btn btn-primary text-center font-weight-bold btn-quero-doar mt-3">
                        <span class="my-auto">QUERO DOAR</span>
                    </a>
                </div>
                <div class="col-md-5 d-none d-md-flex">
                    <img src="{{ asset ('site/img/pessoas2.png')}}" alt="" class="img-fluid w-100 my-auto">
                </div>
            </div>
        </section>
        <section class="container text-center" id="about">
            <div class="h-100">
                <h1 class="w-100 font-weight-bold">{{ __('Sobre Nós')}}</h1>
                <div class="row">
                    <div class="col-lg-6 col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                {{-- <img class="rounded-circle" src="{{ asset ('site/img/icon-humandonation.png')}}" alt="Generic placeholder image" width="140" height="140"> --}}
                                <i class="fas fa-globe-americas fa-7x"></i>
                                <h5 class="card-title text-center">{{ __('O que somos')}}</h5>
                              <p class="card-text">{{ __(' Human Donation é uma plataforma que visa educar e ajudar a sociedade no processo de doação com transparência.')}}</p>
                              {{-- <a href="#" class="btn btn-primary">150 Doações</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-hands-helping fa-7x"></i>
                                <h5 class="card-title text-center">{{ __('Objetivo')}}</h5>
                              <p class="card-text">{{ __('Intermediar doadores e instituições de caridade.')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-users fa-7x"></i>
                                <h5 class="card-title text-center">{{ __('Publico alvo')}}</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fas fa-synagogue fa-lg"></i>&nbsp;&nbsp;{{ __('Instituições de caridade')}}</li>
                                    <li class="list-group-item"><<i class="fas fa-people-carry fa-lg"></i>&nbsp;&nbsp;{{ __('Doadores')}}</li>
                                    <li class="list-group-item"><i class="fas fa-synagogue fa-lg"></i>&nbsp;&nbsp;{{ __('Pessoas em vunerabilidade social')}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-hand-holding-heart fa-7x"></i>
                                <h5 class="card-title text-center">{{ __('Como trabalhamos')}}</h5>
                              <p class="card-text">{{ __('Intermediar doadores e instituições de caridade.')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="container h-75 text-center" id="partners">
            <div class="h-100" id="partners">
                <h1 class="w-100 font-weight-bold" style="padding-top: 2rem;">{{ __('Instituições Cadastradas')}}</h1>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img class="rounded-circle" src="{{ asset ('site/img/pessoas1.png')}}" alt="Generic placeholder image" width="140" height="140">
                                    <h2>Heading</h2>
                                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                                </div>
                                <div class="col-lg-6 d-none d-lg-block">
                                    <img class="rounded-circle" src="{{ asset ('site/img/pessoas1.png')}}" alt="Generic placeholder image" width="140" height="140">
                                    <h2>Heading</h2>
                                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img class="rounded-circle" src="{{ asset ('site/img/pessoas2.png')}}" alt="Generic placeholder image" width="140" height="140">
                                    <h2>Heading</h2>
                                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                                </div>
                                <div class="col-lg-6 d-none d-lg-block">
                                    <img class="rounded-circle" src="{{ asset ('site/img/pessoas2.png')}}" alt="Generic placeholder image" width="140" height="140">
                                    <h2>Heading</h2>
                                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img class="rounded-circle" src="{{ asset ('site/img/pessoas3.png')}}" alt="Generic placeholder image" width="140" height="140">
                                    <h2>Heading</h2>
                                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                                </div>
                                <div class="col-lg-6 d-none d-lg-block">
                                    <img class="rounded-circle" src="{{ asset ('site/img/pessoas3.png')}}" alt="Generic placeholder image" width="140" height="140">
                                    <h2>Heading</h2>
                                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">{{ __('Anterior')}}</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">{{ __('Próximo')}}</span>
                    </a>
                </div>  
            </div>
        </section> --}}
        <section class="container h-75 p-3 text-center" id="newsletter">
            <div class="h-100">
                <i class="far fa-envelope-open fa-6x"></i>
                <h1 class="w-100 font-weight-bold" style="padding-top: 2rem;">{{ __('Newsletter')}}</h1>
                <div class="row">
                    <div class="col-auto">
                        <form action="">
                            <div class="input-group mb-3 input-group-lg">
                                <h3>{{ __('Assine nossa')}}&nbsp;<u>{{ __('newsletter mensal')}}</u>&nbsp;{{ __('para receber as últimas notícias e oportunidades de voluntariado.')}}</h3>
                                <input type="text" class="form-control" name="newsletter" id="newsletter" placeholder="Insira seu melhor email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="button"><i class="fas fa-paper-plane"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
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
       <script>
            $(document).ready(function(){
                $('.cep').mask('00000-000');
                $('.phone').mask('0000-0000');
                $('.phone_with_ddd').mask('(00) 00000-0000');
                $('.cpf').mask('000.000.000-00', {reverse: true});
                $('.money').mask('000.000.000.000.000,00', {reverse: true});
            });
       </script>
    </body>
</html>


