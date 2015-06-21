@extends('app')
@section('content')
<!-- Jumbotron Header -->
<header class="jumbotron hero-spacer">
    <h1>CD4 Levels <a href="/cd4" class="btn btn-primary btn-large">More Details</a></h1>
    <script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1.1','packages':['corechart']}]}"></script>
    <div id="chart_div"></div>
    <script type="text/javascript">
        google.setOnLoadCallback(drawVisualization);

        function drawVisualization() {
          var data = google.visualization.arrayToDataTable({{ json_encode($graphData) }})
          var options = {
            hAxis: {title: 'Year'},
            vAxis: {title: 'Levels', minValue: 200}
          };

          var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
          chart.draw(data, options);
        }
    </script>
</header>

<!-- Title -->
<div class="row">
    <div class="col-lg-12">
        <h3>Medications</h3>
    </div>
</div>
<!-- /.row -->

@foreach($meds)
    <div class="col-md-3 col-sm-6 hero-feature">
        <div class="thumbnail">
            <div class="caption">
                <h3>{{ $meds->name }}</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
    </div>
@endforeach

@endsection