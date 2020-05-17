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
                    <h2 class="font-weight-bolder h2">Conectando pessoas, transformando vidas.</h2>
                    <h5 class="font-weight- mb-5 h5">Faça sua doação de um jeito rápido, fácil e simples!</h5>
                    <div class="col-md-5 d-flex d-md-none">
                        <img src="{{ asset ('site/img/pessoas2.png')}}" alt="" class="img-fluid w-100 my-auto">
                    </div>
                    <a href="#" class="btn btn-primary text-center font-weight-bold btn-quero-doar mt-3">
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
                <h3 class="w-100 font-weight-bold" style="padding-top: 2rem;">Sobre Nós</h3>
                <div class="row">
                    <div class="col-lg-6 col-sm-3">
                        {{-- <i class="fas fa-globe-americas fa-7x"></i>
                        <h2>O que somos</h2>
                        <p>A Human Donation é uma plataforma que visa educar e ajudar a sociedade no processo de doação com transparência.</p> --}}
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
                        {{-- <i class="fas fa-globe-americas fa-7x"></i>
                        <h2>Objetivo</h2>
                        <p>Intermediar doadores e instituições de caridade.</p> --}}
                        <div class="card">
                            <div class="card-body">
                              <h5 class="card-title text-center">{{ __('')}}</h5>
                              <img class="rounded-circle" src="{{ asset ('site/img/icon-humandonation.png')}}" alt="Generic placeholder image" width="140" height="140">
                              <p class="card-text">{{ __('')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-3">
                        {{-- <i class="fas fa-globe-americas fa-7x"></i>
                        <h2>Publico alvo</h2>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul> --}}
                        <div class="card">
                            <div class="card-body">
                              <h5 class="card-title text-center">#1°</h5>
                              <img class="rounded-circle" src="{{ asset ('site/img/icon-humandonation.png')}}" alt="Generic placeholder image" width="140" height="140">
                              <p class="card-text">Emanuel Milton</p>
                              <a href="#" class="btn btn-primary">150 Doações</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-3">
                        {{-- <i class="fas fa-globe-americas fa-7x"></i>
                        <h2>Como trabalhamos</h2>
                        <p>Por meio de uma plataforma web, realizamos as intermediações e através de redes sociais, mobilizamos a sociedade a doar.</p> --}}
                        <div class="card">
                            <div class="card-body">
                              <h5 class="card-title text-center">#1°</h5>
                              <img class="rounded-circle" src="{{ asset ('site/img/icon-humandonation.png')}}" alt="Generic placeholder image" width="140" height="140">
                              <p class="card-text">Emanuel Milton</p>
                              <a href="#" class="btn btn-primary">150 Doações</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container h-75 text-center" id="partners">
            <div class="row" id="partners">
                <h3 class="w-100 font-weight-bold" style="padding-top: 2rem;">Instituições Cadastradas</h3>
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
                                </div><!-- /.col-lg-4 -->
                                <div class="col-lg-6 d-none d-lg-block">
                                    <img class="rounded-circle" src="{{ asset ('site/img/pessoas1.png')}}" alt="Generic placeholder image" width="140" height="140">
                                    <h2>Heading</h2>
                                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                                </div><!-- /.col-lg-4 -->
                                {{-- <div class="col-lg-4 d-none d-lg-block">
                                    <img class="rounded-circle" src="{{ asset ('site/img/pessoas1.png')}}" alt="Generic placeholder image" width="140" height="140">
                                    <h2>Heading</h2>
                                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                                    <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                                </div><!-- /.col-lg-4 --> --}}
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img class="rounded-circle" src="{{ asset ('site/img/pessoas2.png')}}" alt="Generic placeholder image" width="140" height="140">
                                    <h2>Heading</h2>
                                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                                </div><!-- /.col-lg-4 -->
                                <div class="col-lg-6 d-none d-lg-block">
                                    <img class="rounded-circle" src="{{ asset ('site/img/pessoas2.png')}}" alt="Generic placeholder image" width="140" height="140">
                                    <h2>Heading</h2>
                                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                                </div><!-- /.col-lg-4 -->
                                {{-- <div class="col-lg-4 d-none d-lg-block">
                                    <img class="rounded-circle" src="{{ asset ('site/img/pessoas2.png')}}" alt="Generic placeholder image" width="140" height="140">
                                    <h2>Heading</h2>
                                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                                </div><!-- /.col-lg-4 --> --}}
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img class="rounded-circle" src="{{ asset ('site/img/pessoas3.png')}}" alt="Generic placeholder image" width="140" height="140">
                                    <h2>Heading</h2>
                                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                                </div><!-- /.col-lg-4 -->
                                <div class="col-lg-6 d-none d-lg-block">
                                    <img class="rounded-circle" src="{{ asset ('site/img/pessoas3.png')}}" alt="Generic placeholder image" width="140" height="140">
                                    <h2>Heading</h2>
                                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                                </div><!-- /.col-lg-4 -->
                                {{-- <div class="col-lg-4 d-none d-lg-block">
                                    <img class="rounded-circle" src="{{ asset ('site/img/pessoas3.png')}}" alt="Generic placeholder image" width="140" height="140">
                                    <h2>Heading</h2>
                                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                                </div><!-- /.col-lg-4 --> --}}
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>  
            </div>
        </section>
        <footer class="footer" id="footer" >
            <div class="container">
                <div class="row">
                    <div class="col-6 justify-content-center" style="margin-left: 16px; margin-right: 15px;">
                        <p class="mb-0">Redes sociais</p>
                        <i class="fab fa-facebook" ></i>
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
                        </form>
                    </div>
                </div>
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


