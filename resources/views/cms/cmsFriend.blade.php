@extends('layouts.cms')

@section('content')

    <div class="row">
        <div class="col-md-12 breadcrumb breadcrumbs"></div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <!--hier komt de content in -->
            <h2>Vriend worden</h2>
        </div>
        <div class="col-md-3">
        </div>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-8">
            <h3>Text voor de word-vriend-pagina:</h3>
            <h3>Linker kolom:</h3>
            {!! Form::model($vriend, ['method' => 'PATCH','url' => ['cms/vriend/update']]) !!}
            {!! Form::textarea('text', "$vriend->content", array('class' => 'form-control summeredit')) !!}
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