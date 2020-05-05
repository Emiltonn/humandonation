@extends('layouts.app')

@section('styles')
    <style>
        .btn-quero-doar {
            width: 100%;
            max-width: 250px;
            height: 45px;
            font-size: 18px;
            vertical-align: middle;
            padding-top: 9px;
        }
    </style>

@endsection

@section('content')
    <section class="container" id="home">
        <div class="row h-100">
            <div class="col-md-7 justify-content-center text-center mb-auto my-md-auto">
                <h2 class="font-weight-bolder h2">Conectando pessoas, transformando vidas.</h2>
                <h5 class="font-weight- mb-5 h5">Faça sua doação de um jeito rápido, fácil e simples!</h5>
                <div class="col-md-5 d-flex d-md-none">
                    <img src="/assets/grupo_amigos.png" alt="" class="img-fluid w-100 my-auto">
                </div>
                <a href="#" class="btn btn-primary text-center font-weight-bold btn-quero-doar mt-3">
                    <span class="my-auto">QUERO DOAR</span>
                </a>
            </div>
            <div class="col-md-5 d-none d-md-flex">
                <img src="/assets/grupo_amigos.png" alt="" class="img-fluid w-100 my-auto">
            </div>
        </div>
    </section>
    <section class="container mb-5 mb-md-0 text-center">
        <div class="row">
            <h3 class="w-100 font-weight-bold">Instituições</h3>
            <div class="col-md-7 my-auto">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd.
            </div>
            <div class="col-md-5 d-none d-md-flex">
                <img src="/assets/grupo_quebra_cabeca.png" alt="" class="img-fluid w-100 mt-auto">
            </div>
        </div>
    </section>
    <section>
        <div class="div-agile p-3" style="background-color: #145AA3BA">
            <h3 class="text-center w-100 font-weight-bold text-white d-none d-md-block">Instituições cadastradas</h3>
            <div>
                <agile
                    class="thumbnails"
                    :options="{
                    autoplay: true,
                    centerMode: true,
                    dots: false,
                    navButtons: false,
                    slidesToShow: 3,
                    responsive: [
                        {
                            breakpoint: 200,
                            settings: {
                                slidesToShow: 2,
                                navButtons: true
                            }
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 4,
                                navButtons: true
                            }
                        },
                    ]
                }"
                >
                    <div class="slide-convenio slide-convenio--thumbniail d-flex" :class="`slide--1`">
                        <img src="/assets/grupo_quebra_cabeca.png" class="my-auto" alt="" style="max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="slide-convenio slide-convenio--thumbniail d-flex" :class="`slide--1`">
                        <img src="/assets/grupo_quebra_cabeca.png" class="my-auto" alt="" style="max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="slide-convenio slide-convenio--thumbniail d-flex" :class="`slide--1`">
                        <img src="/assets/grupo_quebra_cabeca.png" class="my-auto" alt="" style="max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="slide-convenio slide-convenio--thumbniail d-flex" :class="`slide--1`">
                        <img src="/assets/grupo_quebra_cabeca.png" class="my-auto" alt="" style="max-width: 100%; max-height: 100%;">
                    </div>
                    <template slot="prevButton">
                        <i class="fas fa-chevron-left"></i>
                    </template>

                    <template slot="nextButton">
                        <i class="fas fa-chevron-right"></i>
                    </template>
                </agile>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-7">
                    <h5 class="w-100 font-weight-bold mb-3">Presenciou algum problema? Nos informe!</h5>
                    <form method="POST" action="#" onsubmit="enviarProblema(event)" id="formProblema">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Digite seu email" required style="height: 50px">
                        </div>
                        <div class="form-group">
                            <textarea name="descricao" required id="" placeholder="Escreva aqui..." rows="7"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success float-right w-50 font-weight-bold" style="height: 50px">ENVIAR</button>
                    </form>
                </div>
                <div class="col-md-5 d-none d-md-flex">
                    <img src="/assets/amigos_suporte.png" alt="" class="img-fluid w-100 mb-auto">
                </div>
            </div>
        </div>

    </section>
@endsection

@section('scripts')

    <script>
        var handleHomeContentHeight = function() {
            $('#home').height($(window).height() - $('#menuPrincipal').height() - 36);

            $(window).on('resize', function() {
                $('#home').height($(window).height() - $('#menuPrincipal').height() - 36);
            });
        };
        $(document).ready(function() {
            handleHomeContentHeight();
        });

        function enviarProblema(e) {
            e.preventDefault()
            axios.post('{{ route('problema.store') }}',
                $('#' + e.target.id).serialize()
            ).then((response) => {
                console.log(response)
            })
        }
    </script>
@endsection
