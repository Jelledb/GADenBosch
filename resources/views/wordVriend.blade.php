@extends('layouts.website')

@section('content')

    <div class="container">
        @if(Session::has('success')))
            <div class="alert alert-success">Betaling is gelukt</div>
        @elseif(Session::has('fail'))
            <div class="alert alert-warning">Betaling is mislukt</div>
        @endif
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <h1 class="centerH1">Vriend worden?</h1>


                    <div class="text">

                        Ook in 2017 kunnen wij niet zonder onze vrienden.<br>
                        Met een kleine of grote vriendendonatie helpt u het Grafisch Atelier ook in 2017 weer aan de weg te timmeren. We hebben weer veel mooie plannen voor projecten, workshops en exposities.
                        Vrienden ontvangen in 2017 een grafisch vriendengeschenk van Alexia Pnevmatikos gratis!
                        <br><br>
                        Vriend van het GA ben je al vanaf € 45,- per jaar, maar een groter bedrag is meer dan welkom.
                        <br>
                        <div class="wrapper-btn">
                            @if (Auth::check() && Auth::user()->isfriend == 1)
                            <button type="button" class="btn btn-default" id="vriend-btn"><span id="vriend-a">U bent al een vriend</span></button>
                        @else
                                <button type="button" class="btn btn-default" id="vriend-btn"><a id="vriend-a" href="/vriend-worden-pay">Ja, ik word vriend!</a></button>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
