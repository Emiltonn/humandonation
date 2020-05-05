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
        </div>
    </nav>
    <div class="line"></div>
    <h1 class="text-center font-weight-bold" style="padding-bottom: 2vh;font-size:3vw">Configurações</h1>
    <form>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="name">Nome</label>
          <input type="text" class="form-control" id="name" placeholder="Nome da Instituição">
        </div>
        <div class="form-group col-md-6">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
      </div>
      <div class="form-row">
        <fieldset disabled>
          <div class="form-group col-md-4">
            <label for="disabledTextInput">Seu ID</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="202004">
          </div>
        </fieldset>
        <div class="form-group col-md-8">
          <label>Sua Logo</label>
          <div class="custom-file">
            <label class="custom-file-label" for="inputGroupFile01">Escolha um arquivo</label>
            <input type="file" class="custom-file-input" id="inputGroupFile01">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Endereço</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Avenida Rodrigo Otávio, 2030">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Complemento</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">Cidade</label>
          <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">Estado</label>
          <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>...</option>
          </select>
        </div>
        <div class="form-group col-md-2">
          <label for="inputZip">Cep</label>
          <input type="text" class="form-control" id="inputZip">
        </div>
      </div>
      <button type="submit" class="btn btn-success btn-lg">Salvar</button>
    </form>
    <div class="line"></div>
</div>
@endsection

@section('scripts')
@endsection
