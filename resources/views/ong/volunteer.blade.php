@extends('layouts.dashboard')

@section('styles')
@endsection

@section('content')
 <!-- Page Content  -->
 <div id="content">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button type="button" id="sidebarCollapse" class="btn btn-info">
                <i class="fas fa-align-left"></i>
                <span>Exibir/Esconder - Menu</span>
            </button>
            <button type="button" class="btn btn-success">
                <i class="fas fa-plus"></i>
                <span>Adicionar Voluntário</span>
            </button>
        </div>
    </nav>

    <div class="line"></div>
    <h1 class="text-center font-weight-bold" style="padding-bottom: 2vh;font-size:3vw">Voluntários Cadastrados</h1>
    <table class="table table-sm">
        <thead class="thead" style="background-color: #0E56A2;color:#FFF">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">País</th>
                <th scope="col">Data de Cadastro</th>
                <th scope="col">Número de documento</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">099762</th>
                <td>Mark Tamares de Souza</td>
                <td>Brasil</td>
                <td>01/04/2020</td>
                <td>033.123.430-20</td>
                <td class="actions">
                    <a class="btn btn-primary btn-xs" href="#"><i class="fas fa-eye"></i></a>
                    <a class="btn btn-warning btn-xs" href="#"><i class="fas fa-pencil-alt"></i></a>
                    <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="line"></div>
</div>
@endsection

@section('scripts')
@endsection
