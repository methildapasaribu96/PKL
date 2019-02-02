@extends('layouts.app')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Dashboard</h2>
                        </div>
                    <div class="panel-body">
                    <h4 align="center">Statistik Mutasi</h4>
                    <canvas id="jos" width="400" height="150"></canvas>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="/js/Chart.min.js"></script>
    <script>
        var data ={
            labels :{!! json_encode($bulans) !!},
            datasets: [{
                label: 'Jumlah mutasi',
                data : {!! json_encode($mutasis) !!},
                backgroundColor: "rgba(151,187,206,0.5)",
                borderColor:"rgba(151,187,205,0.8)",
            }]
        };

        var options = {
            scales:{
                yAxes: [{
                    ticks:{
                        beginAtZero:true,
                        stepSize:5
                    }
                }]
            }
        };

        var ctx= document.getElementById("jos").getContext("2d");

        var authorChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: options
        });
    </script>
    @endsection

