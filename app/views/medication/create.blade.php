<!-- app/views/medication/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('medication') }}">View All Medications</a></li>
            <li><a href="{{ URL::to('medication/create') }}">+ New Medication</a>
        </ul>
    </nav>

    <h1>Add a Medication</h1>

    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::open(array('url' => 'medication')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('dosage', 'Dosage') }}
        {{ Form::number('dosage', Input::old('dosage'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('dosage_size', 'Dosage Size') }}
        {{ Form::select('dosage_size', array('mL' => 'mL', 'oz' => 'oz'), Input::old('dosage_size'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('frequency', 'Frequency') }}
        {{ Form::times('frequency', Input::old('frequency'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('frequency_per', 'times every ') }}
        {{ Form::text('frequency_per', Input::old('frequency'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('count', 'Count') }}
        {{ Form::number('count', Input::old('count'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Add Medication!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>
</body>
</html>