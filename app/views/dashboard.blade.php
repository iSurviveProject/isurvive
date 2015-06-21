@extends('app')
@section('content')
<!-- Jumbotron Header -->
<header class="jumbotron hero-spacer">
    <h1>CD4 Levels</h1>
    <p>
    	<div id="cd4-level-graph"></div>
    	<script type="text/javascript">
    		Morris.Line({
				  element: 'cd4-level-grap',
				  data: [
				    { y: '2006', a: 100},
				    { y: '2007', a: 75},
				    { y: '2008', a: 50},
				    { y: '2009', a: 75},
				    { y: '2010', a: 50},
				    { y: '2011', a: 75},
				    { y: '2012', a: 100}
				  ],
				  xkey: 'y',
				  ykeys: ['a'],
				  labels: ['Series A']
				});
    	</script>
    </p>
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
                    <img src="http://placehold.it/800x500" alt="">
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