@extends('layouts.cms')

@section('content')

    <div class="row">
        <div class="col-md-12 breadcrumb breadcrumbs">CMS >> Vacatures >> Vacature </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <h2>Vacature aanmaken</h2>
        </div>
        <div class="col-md-3">

        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Oeps!</strong> Er was een probleem met de input:<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(array('url' => 'cms/vacature/create', 'method' =>'POST')) !!}
    <div class="row">
        <div class="col-md-8">
            <h3>Titel:</h3>
            {!! Form::text('title', null, array('class' => 'form-control')) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <h3>Korte beschrijving:</h3>
            {!! Form::text('short_description', null, array('class' => 'form-control')) !!}
        </div>
        <div class="col-md-4"></div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <h3>Volledige beschrijving:</h3>
            {!! Form::textarea('description', null, array('class' => 'form-control')) !!}
        </div>
        <div class="col-md-4"></div>
    </div>
    <hr class="breeklijn"/>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Zichtbaar</strong>
            <input type='hidden' value='0' name='zichtbaar'>
            <input type='checkbox' value='1' name='zichtbaar'>
        </div>
    </div>
    <hr class="breeklijn"/>
    <div class="row">
        <div class="col-md-3">
            <button type="submit" class="btn btn-primary">Sla Vacature op</button>
        </div>
        <div class="col-md-9"></div>
    </div>
    {!! Form::close() !!}
@endsection