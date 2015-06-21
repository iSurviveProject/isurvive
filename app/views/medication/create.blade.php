<!-- app/views/medication/create.blade.php -->

@extends('app')
@section('content')
<div class="page-header">
    <h1>Add a Medication</h1>
</div>
<div class="panel panel-default">
    <div class="panel-heading">New Entry</div>
        <div class="panel-body">
            <!-- if there are creation errors, they will show here -->
            {{ HTML::ul($errors->all()) }}

            {{ Form::open(array('action' => 'MedicationController@store', 'class' => 'form-horizontal')) }}

            <div class="form-group">
                {{ Form::label('name', 'Name', array('for' => 'name', 'class' => 'col-sm-2 control-label')) }}
                <div class="col-sm-10">
                    {{ Form::text('name', Input::old('name'), array('class' => 'form-control typeahead med-list')) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('dosage', 'Dosage', array('for' => 'dosage', 'class' => 'col-sm-2 control-label')) }}
                <div class="col-sm-10">
                    {{ Form::number('dosage', Input::old('dosage'), array('class' => 'form-control')) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('dosage_size', 'Dosage Size', array('for' => 'dosage_size', 'class' => 'col-sm-2 control-label')) }}
                <div class="col-sm-10">
                    {{ Form::select('dosage_size', array('mL' => 'mL', 'oz' => 'oz'), Input::old('dosage_size'), array('class' => 'form-control')) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('frequency', 'Frequency', array('for' => 'frequency', 'class' => 'col-sm-2 control-label')) }}
                <div class="col-sm-10">
                    {{ Form::number('frequency', Input::old('frequency'), array('class' => 'form-control')) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('frequency_per', 'times every ', array('for' => 'frequency_per', 'class' => 'col-sm-2 control-label')) }}
                <div class="col-sm-10">
                    {{ Form::text('frequency_per', Input::old('frequency'), array('class' => 'form-control')) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('count', 'Count', array('for' => 'count', 'class' => 'col-sm-2 control-label')) }}
                <div class="col-sm-10">
                    {{ Form::number('count', Input::old('count'), array('class' => 'form-control')) }}
                </div>
            </div>

            {{ Form::hidden('ndc', Input::old('ndc')) }}

            {{ Form::submit('Add Medication!', array('class' => 'btn btn-primary')) }}

            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection
@section('footer-scripts')
    <script src="/js/bootstrap3-typeahead.js"></script>
    <script type="text/javascript">
        var $input = $('.typeahead.med-name');

        var medList = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            remote: {
                url: '/drug-autocomplete.php?name=%QUERY',
                wildcard: '%QUERY'
            }
        });

        $input.typeahead(null, {
            name: 'name',
            display: 'value',
            source: medList
        });
        /*$input.typeahead( {
                hint: true,
                highlight: true,
                minLength: 3
            }, {
                name: 'meds',
                remote: '/countries.json',
            } );*/
    </script>
@endsection