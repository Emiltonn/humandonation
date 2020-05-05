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
            <button type="button" class="btn btn-danger">
              <i class="fa-2x fas fa-hand-holding-heart"></i>
              <span>Solicitar nova necessidade</span>
          </button>
        </div>
    </nav>
    <div class="line"></div>
    <h1 class="text-center font-weight-bold" style="padding-bottom: 2vh;font-size:3vw">Doações Recebidas</h1>
    <table class="table table-sm">
        <thead class="thead" style="background-color: #0E56A2;color:#FFF">
            <tr>
                <th scope="col">Data</th>
                <th scope="col">ID</th>
                <th scope="col">Doador</th>
                <th scope="col">Doação</th>
                <th scope="col">Categoria</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">01/04/2020</th>
                <td>033122</td>
                <td>Emanuel Milton</td>
                <td>10und Cestas Básica</td>
                <td>Alimentos</td>
                <td class="actions">
                    <a class="btn btn-success btn-xs" href="#"><i class="fas fa-check"></i>Recebido</a>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="line"></div>
</div>
@endsection

@section('scripts')
@endsection
