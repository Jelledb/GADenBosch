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
            <textarea rows="5" cols="80"></textarea>
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

@endsection