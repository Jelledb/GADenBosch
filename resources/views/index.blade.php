@extends('layouts.website')

@section('content')

<div class="container" style="height: 1800px;">
    <div class="slider">
        <ul class="bxslider">
            <li><img src="{{asset('images/hp_home1.jpg')}}" title="foto 1"/></li>
            <!--<li><img src="{{asset('images/hp_home2.jpg')}}" title="foto 2"/></li>
            <li><img src="{{asset('images/hp_home5.jpg')}}" title="foto 3"/></li>
            <li><img src="{{asset('images/hp_werkplaatsfoto web 4.jpg')}}" title="foto 4"/></li>-->
        </ul>
    </div>
    <div class="nieuws-overzicht-home">
        <div id="item" style="position: absolute; left: 0px; top: 0px;">
            <h2 class="arch">Francine Steegs - Zeefdrukken, gemengde techniek en olieverfschilderijen</h2>
            <div class="fotoblok" style="width:296px; height:419.00444444444px;">
                <img src="{{asset('images/foto-nieuws-homepage/253_een verte voorbij onze ogen_.jpg')}}" width="296" height="419.00444444444" border="0">
            </div>
            <div class="textblok">In de werkplaats van het Grafisch Atelier, op de eerste verdieping van de Willem II Fabriek, exposeert Francine Steegs in de maand april zeefdrukken op papier en werken op doek en...</div>
            <div class="leesmeer arch">LEES VERDER &gt;</div>
        </div>
    </div>
</div>


@endsection