@extends('app')
@section('content')
<!-- Jumbotron Header -->
<header class="jumbotron hero-spacer">
    <h1>CD4 Levels</h1>
    <div id="cd4-level-graph"></div>
    <script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1.1','packages':['corechart']}]}"></script>
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
    <script type="text/javascript">
        google.setOnLoadCallback(drawVisualization);

        function drawVisualization() {
          // Some raw data (not necessarily accurate)
          var data = google.visualization.arrayToDataTable([
            ['Month', 'Bolivia', 'Ecuador', 'Madagascar', 'Papua New Guinea', 'Rwanda', 'Average'],
            ['2004/05',  165,      938,         522,             998,           450,      614.6],
            ['2005/06',  135,      1120,        599,             1268,          288,      682],
            ['2006/07',  157,      1167,        587,             807,           397,      623],
            ['2007/08',  139,      1110,        615,             968,           215,      609.4],
            ['2008/09',  136,      691,         629,             1026,          366,      569.6]
          ]);

          var options = {
            title : 'Monthly Coffee Production by Country',
            vAxis: {title: "Cups"},
            hAxis: {title: "Month"},
            seriesType: "function",
            series: {5: {type: "line"}}
          };

          var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
          chart.draw(data, options);
        }
    </script>
    <p><a href="/cd4" class="btn btn-primary btn-large">More Details</a></p>
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