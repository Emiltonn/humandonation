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

    <!-- CHART SCRIPTS -->
    <!--
    <script src="{{ asset ('chart/Chart.js')}}"></script>
     <canvas id="myChart" width="400" height="400"></canvas> 
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
    -->
    <!-- CHART SCRIPTS -->
    <div class="line"></div>

    <h1 class="text-center font-weight-bold" style="padding-bottom: 2vh;font-size:3vw">Top 3 Doadores {{ date('Y') }}</h1>
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
