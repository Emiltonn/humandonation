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
    <h1 class="text-center font-weight-bold" style="padding-bottom: 2vh;font-size:3vw">Suporte</h1>
    <div class="container">
      <div class="row">
        <div class="col-8">
          <form>
            <div class="form-group">
              <label for="exampleFormControlInput1">Seu Email</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Seu contato(Whatsapp)</label>
              <input class="form-control" type="text" placeholder="Ex: +5592981234567">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Título</label>
              <input class="form-control" type="text" placeholder="Descrição breve do problema">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Descrição do problema...</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descreva o problema aqui..."></textarea>
            </div>
            <button type="submit" class="btn btn-success btn-lg">Enviar</button>
          </form>
        </div>
        <div class="col-4">
          <img src="{{ asset ('site/img/pessoas1.png')}}" alt="pessoas1.png" class="img-fluid" style="position: absolute;bottom: 0">
        </div>
      </div>
    </div>
    <div class="line"></div>
</div>
@endsection

@section('scripts')
@endsection
