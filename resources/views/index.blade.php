@extends('layouts.website')

@section('content')

<div class="container">
    <div class="slider">
        <ul class="bxslider">
            <li><img src="{{asset('images/hp_home1.jpg')}}" title="foto 1"/></li>
            <li><img src="{{asset('images/hp_home2.jpg')}}" title="foto 2"/></li>
            <li><img src="{{asset('images/hp_home5.jpg')}}" title="foto 3"/></li>
            <li><img src="{{asset('images/hp_werkplaatsfoto web 4.jpg')}}" title="foto 4"/></li>
        </ul>
    </div>
    @foreach($newsItems as $newsItem)
        {{ $newsItem->titel }}
    @endforeach
    <div class="nieuws-overzicht-home">
        <div class="nieuws-item-home panel panel-default">
            <img src="{{asset('images/foto-nieuws-homepage/265_DickVerdult_Jaarprent_2017_GrafischAtelierDenBosch.jpg')}}">
            <a href="">
                <h2 class="arch">Jaarprent 2016</h2>
            </a>
            <span class="nieuws-date">Geplaatst op 24-02-2017</span>
            <div class="textblok">Wij zijn bijzonder verheugd u op de valreep van het jaar onze Jaarprent 2016 te kunnen presenteren. Op ons verzoek ontworpen door duivelskunstenaar Dick Verdult, gedrukt door...</div>
        </div>
        <div class="nieuws-item-home panel panel-default">
            <img src="{{asset('images/foto-nieuws-homepage/41_januari.jpg')}}">
            <a href="">
                <h2 class="arch">Cyanotype</h2>
            </a>
            <span class="nieuws-date">Geplaatst op 24-02-2017</span>
            <div class="textblok">In 1842 ontdekte de Engelse fotopionier Sir John Herschel een oplossing van twee ijzerzouten die na droging lichtgevoelig is. Door belichting vormen deze twee ijzerzouten een onoplosbare...</div>
        </div>
        <div class="nieuws-item-home panel panel-default">
            <img src="{{asset('images/foto-nieuws-homepage/253_een verte voorbij onze ogen_.jpg')}}">
            <a href="">
                <h2 class="arch">Francine Steegs - Zeefdrukken, gemengde techniek en olieverfschilderijen</h2>
            </a>
            <span class="nieuws-date">Geplaatst op 24-02-2017</span>
            <div class="textblok">In de werkplaats van het Grafisch Atelier, op de eerste verdieping van de Willem II Fabriek, exposeert Francine Steegs in de maand april zeefdrukken op papier en werken op doek en...</div>
        </div>
    </div>
</div>

@endsection