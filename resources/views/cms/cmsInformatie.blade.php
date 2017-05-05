@extends('layouts.cms')

@section('content')

    <div class="row">
        <div class="col-md-12 breadcrumb breadcrumbs"></div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <!--hier komt de content in -->
            <h2>Informatie</h2>
        </div>
        <div class="col-md-3">
        </div>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-8">
            <h3>Text voor de over-ons-pagina:</h3>
            <h3>Linker kolom:</h3>
            {!! Form::model($overons, ['method' => 'PATCH','url' => ['cms/informatie/update']]) !!}
            {!! Form::textarea('text-links', "$overons->content_left", array('class' => 'form-control summeredit')) !!}
            <h3>Rechter kolom:</h3>
            {!! Form::textarea('text-rechts', "$overons->content_right", array('class' => 'form-control summeredit')) !!}
        </div>
        <div class="col-md-3"></div>
    </div>
    <hr class="breeklijn"/>
    <div class="row">
        <div class="col-md-3">
            <input type="submit" value="Zet op de site" name="submit">
        </div>
        <div class="col-md-9"></div>
    </div>
    {!! Form::close() !!}
@endsection