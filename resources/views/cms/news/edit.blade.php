@extends('layouts.cms')

@section('content')
    <div>
        <div>
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Nieuwsbericht bewerken</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('news.index') }}">Ga terug</a>
                </div>
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

        {!! Form::model($item, ['method' => 'PATCH','route' => ['news.update', $item->id]]) !!}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Titel:</strong>
                    {!! Form::text('titel', null, array('placeholder' => 'Voer een titel in','class' => 'form-control')) !!}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Beschrijving:</strong>
                    {!! Form::textarea('beschrijving', null, array('placeholder' => 'Voer een beschrijving in','class' => 'form-control')) !!}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tekst:</strong>
                    {!! Form::textarea('tekst', null, array('placeholder' => 'Voer een tekst in','class' => 'form-control','style'=>'')) !!}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Zichtbaar</strong>
                    <input type='hidden' value='0' name='zichtbaar'>
                    <input type='checkbox' value='1' name='zichtbaar'>
                </div>
            </div>

            <!-- TODO foto -->

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Sla bewerking op</button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection