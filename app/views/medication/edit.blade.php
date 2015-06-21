<!-- app/views/medication/edit.blade.php -->

@extends('app')
@section('content')
    <div class="page-header">
        <h1>Edit a Medication</h1>
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
            {{ Form::select('dosage_unit', array('mL' => 'mL', 'oz' => 'oz', 'mG' => 'mg'), Input::old('dosage_unit'), array('class' => 'form-control')) }}
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

        {{ Form::submit('Save Medication!', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}

    </div>
@endsection