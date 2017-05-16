@extends('layouts.cms')

@section('content')


    <div class="row">
        <div class="col-md-12 breadcrumb breadcrumbs"></div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <h2>Sponsor</h2>
        </div>
        <div class="col-md-3">

        </div>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
        <img src="/images/{{ Session::get('path') }}">
    @endif

    {!! Form::open(array('method'=>'POST', 'files'=>true)) !!}
        <div class="row">
            <div class="col-md-8">
                {!! Form::label('name', 'Naam:') !!}
                <br />
                {!! Form::text('name') !!}
            </div>
        </div>

        <br />
        <br />
        <div class="row">
            <div class="col-md-8">
                {!! Form::label('website', 'Website:') !!}
                <br />
                {!! Form::text('website') !!}
            </div>
        </div>

        <br />
        <br />
        <div class="row">
            <div class="col-md-8">
                {!! Form::label('logo', 'Logo:') !!}
                {!! Form::file('image') !!}
            </div>
        </div>

        <br />
        <br />
        <div class="row">
            <div class="col-md-8">
                {!! Form::label('toon', 'Toon:') !!}
                <br />
                {!! Form::select('visible', array('yes' => 'Ja', 'no' => 'Nee')) !!}
            </div>
        </div>

        <br />
        <br />
        <div class="row">
            <div class="col-md-8">
                {!! Form::submit('Opslaan', array('class' => 'btn btn-success')) !!}
            </div>
        </div>
    {!! Form::close() !!}
@endsection