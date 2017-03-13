@extends('layouts.cms')

@section('content')


    <div class="row">
        <div class="col-md-12 breadcrumb breadcrumbs"></div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <h2>Nieuwsbrief</h2>
        </div>
        <div class="col-md-3">

        </div>
    </div>
    <div class="row">
        <div class="container">
            <p>Hier komt de titel van de Nieuwsbrief:</p>
            <input type="text">

            <hr class="breeklijn"/>

            <p>Hier komt de text van de Nieuwsbrief:</p>
            <textarea rows="5" cols="80"></textarea>

            <hr class="breeklijn"/>

            <div class="row">
                <div class="col-md-3">
                    <input type="submit" value="Versturen" name="submit">
                </div>
                <div class="col-md-9"></div>
            </div>
        </div>
    </div>
@endsection