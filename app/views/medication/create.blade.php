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
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control med-name', 'data-provide' => 'typeahead')) }}
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
@section('footer-scripts')
    <script src="/js/bootstrap3-typeahead.js"></script>
    <script type="text/javascript">
        var $input = $('.med-name');

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