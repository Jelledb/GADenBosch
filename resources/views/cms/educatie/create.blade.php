@extends('layouts.cms')

@section('content')
<div>
    <div>
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Nieuwe pagina aanmaken</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('educatie.index') }}">Ga terug</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Oeps!</strong> Er is iets misgegaan met het aanmaken:<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(array('route' => 'educatie.store','method'=>'POST', 'files' => true)) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titel:</strong>
                {!! Form::text('titel', null, array('placeholder' => 'Voer een titel in','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Linkerkolom:</strong>
                {!! Form::open(array('url' => 'upload/image', 'method'=>'POST', 'files' => true)) !!}
                {!! Form::textarea('leftcolum', null, array('class' => 'form-control summeredit')) !!}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Rechterkolom:</strong>
                {!! Form::open(array('url' => 'upload/image', 'method' => 'POST', 'files' =>true)) !!}
                {!! Form::textarea('rightcolum', null, array('class' => 'form-control summeredit')) !!}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Sla pagina op</button>
        </div>
    </div>
    {!! Form::close() !!}
</div>
@endsection