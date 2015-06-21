@extends('app')
@section('content')
<!-- Jumbotron Header -->
<header class="jumbotron hero-spacer">
    <h1>CD4 Levels <a href="/cd4" class="btn btn-primary btn-large">More Details</a></h1>
    <div id="cd4-level-graph"></div>
    <script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1.1','packages':['corechart']}]}"></script>
    <script type="text/javascript">
        google.setOnLoadCallback(drawVisualization);

        function drawVisualization() {
          // Some raw data (not necessarily accurate)
          var data = google.visualization.arrayToDataTable([
            ['Month', 'Levels', 'Optimal'],
            ['2004/05',  2500,      1600],
            ['2005/06',  1800,      1600],
            ['2006/07',  3050,      1600],
            ['2007/08',  3300,      1600],
            ['2008/09',  4000,      1600]
          ]);

          var options = {
            hAxis: {title: 'Year'},
            vAxis: {title: 'Levels', minValue: 0, maxVlaue: 10000}
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

<div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <div class="caption">
                        <h3>Feature Label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <div class="caption">
                        <h3>Medication One</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <div class="caption">
                        <h3>Medication Two</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <div class="caption">
                        <h3>Medication Three</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->

<hr>
@endsection