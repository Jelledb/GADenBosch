@extends('layouts.cms')

@section('content')
    <div>
        <div>
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Foto's van de slider bewerken</h2>
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
        @foreach($editImageSlider as $item)
            {!! Form::open(array('method'=>'POST', 'files'=>true)) !!}
            <div class="row">
                <div class="col-md-8">
                    {!! Form::label('logo', 'Logo:') !!}
                    <br />
                    <img src="{{ $item->foto }}" />
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
                    @if($item->zichtbaar == '1')
                        {!! Form::select('visible', array('1' => 'Ja', '0' => 'Nee'), '1') !!}
                    @else
                        {!! Form::select('visible', array('1' => 'Ja', '0' => 'Nee'), '0') !!}
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
    </div>
@endsection