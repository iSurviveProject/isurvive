<!-- app/views/medication/create.blade.php -->

@extends('app')
@section('content')
<div class="page-header">
    <h1>Add a Medication</h1>
</div>
<div class="panel panel-default">
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
        {{ Form::number('frequency', Input::old('frequency'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('frequency_per', 'times every ') }}
        {{ Form::text('frequency_per', Input::old('frequency'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('count', 'Count') }}
        {{ Form::number('count', Input::old('count'), array('class' => 'form-control')) }}
    </div>

    {{ Form::hidden('ndc', Input::old('ndc')) }}

    {{ Form::submit('Add Medication!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>
@endsection