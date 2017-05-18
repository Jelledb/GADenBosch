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
    @foreach($editSponsor as $sponsor)
        {!! Form::open(array('method'=>'POST', 'files'=>true)) !!}
            <div class="row">
                <div class="col-md-8">
                    {!! Form::label('name', 'Naam:') !!}
                    <br />
                    {!! Form::text('name', "$sponsor->name") !!}
                </div>
            </div>

            <br />
            <br />
            <div class="row">
                <div class="col-md-8">
                    {!! Form::label('website', 'Website:') !!}
                    <br />
                    {!! Form::text('website', "$sponsor->website") !!}
                </div>
            </div>

            <br />
            <br />
            <div class="row">
                <div class="col-md-8">
                    {!! Form::label('logo', 'Logo:') !!}
                    <br />
                    <img src="/{{ $sponsor->photo }}" height="200" width="200"/>
                    <br />
                    <br />
                    {!! Form::file('image') !!}
                </div>
            </div>

            <br />
            <br />
            <div class="row">
                <div class="col-md-8">
                    {!! Form::label('toon', 'Toon:') !!}
                    <br />
                    @if($sponsor->visible == 'yes')
                        {!! Form::select('visible', array('yes' => 'Ja', 'no' => 'Nee'), 'yes') !!}
                    @else
                        {!! Form::select('visible', array('yes' => 'Ja', 'no' => 'Nee'), 'no') !!}
                    @endif
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
    @endforeach
@endsection