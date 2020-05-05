@extends('layouts.app')

@section('styles')
    <style>
        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 35px !important;
        }
        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 35px !important;
        }
        .select2-container .select2-selection--single {
            height: 41px !important;
        }
        .select2-container--open .select2-dropdown {
            top: -8px;
        }
        .select2-results__option:last-child {
            border-radius: 0 0 5px 5px;
        }
    </style>
@endsection

@section('content')

    <div class="container mt-3">
        <div class="row pl-3 pr-3 ">
            <div class="col-lg-5 col-md-6">
                <div class="row">
                    <div class="col-md-8">
                        <h5 class="w-100 font-weight-bold mb-3 text-left">Cadastre-se aqui como:</h5>
                    </div>
                    <div class="col-md-4 pl-md-0 mb-2">
                        <select class="select2 w-100 select2-custom" name="perfil">
                            <option value="doador">Doador</option>
                            <option value="instituicao">Instituição</option>
                        </select>
                    </div>
                </div>
                <form action="">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="@error('name') is-invalid @enderror"
                               style="height: 50px" value="{{ old('name') }}" required
                               placeholder="Digite seu Nome Completo" autocomplete="name">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="@error('email') is-invalid @enderror"
                               style="height: 50px" value="{{ old('email') }}" required
                               placeholder="Digite seu Email" autocomplete="email">
                    </div>
                    <div class="form-group">
                        <input type="text" name="username" class="@error('username') is-invalid @enderror"
                               style="height: 50px" value="{{ old('username') }}" required
                               placeholder="Digite seu Nome de Usuário" autocomplete="username">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="@error('password') is-invalid @enderror"
                               style="height: 50px" value="{{ old('password') }}" required
                               placeholder="Digite sua Senha" autocomplete="password">
                    </div>
                    <button type="submit" class="btn btn-success float-right w-50 font-weight-bold"
                            style="height: 50px">ENVIAR
                    </button>
                </form>
            </div>
            <div class="col-md-6 d-none d-md-flex ml-auto">
                <img src="/assets/amigos_suporte.png" alt="" class="img-fluid w-100 mb-auto">
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('.select2').select2({
                minimumResultsForSearch: -1,
                width: '100%',
                containerCssClass: 'border-select-blue',
                dropdownCssClass: 'border-select-dropdown-blue'
            });
        });
    </script>
@endsection
