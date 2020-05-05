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

            <!--
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-align-justify"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Page</a>
                    </li>
                </ul>
            </div> 
        -->
        </div>
    </nav>

    <div class="line"></div>

    <h1 class="text-center font-weight-bold" style="padding-bottom: 2vh;font-size:3vw">Emanuel Milton - Template Page - {{ date('Y') }}</h1>
    <div class="row" style="text-align:center">
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">#1°</h5>
              <img class="rounded-circle" src="{{ asset ('site/img/icon-humandonation.png')}}" alt="Generic placeholder image" width="140" height="140">
              <p class="card-text">Emanuel Milton</p>
              <a href="#" class="btn btn-primary">150 Doações</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">#2°</h5>
              <img class="rounded-circle" src="{{ asset ('site/img/icon-humandonation.png')}}" alt="Generic placeholder image" width="140" height="140">
              <p class="card-text">Emanuel Milton</p>
              <a href="#" class="btn btn-primary">137 Doações</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">#3°</h5>
              <img class="rounded-circle" src="{{ asset ('site/img/icon-humandonation.png')}}" alt="Generic placeholder image" width="140" height="140">
              <p class="card-text">Emanuel Milton</p>
              <a href="#" class="btn btn-primary">109 Doações</a>
            </div>
          </div>
        </div>
      </div>
    <div class="line"></div>
</div>
@endsection

@section('scripts')
@endsection
