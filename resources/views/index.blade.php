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
    <div class="nieuws-overzicht-home">
        <h2>Laatste nieuws</h2>
        <div>
            <a href="/nieuws">Klik hier om alle nieuwsberichten te lezen</a>
        </div>

        @foreach($newsItems as $newsItem)
            <div class="nieuws-item-home panel panel-default col-md-6">
                <div class="nieuws-item-foto">
                    <img src="{{asset('images/foto-nieuws-homepage/265_DickVerdult_Jaarprent_2017_GrafischAtelierDenBosch.jpg')}}">
                </div>
                <p class="nieuws-titel">
                    <a href="/nieuws/{{ $newsItem->id }}">{{ $newsItem->titel }}</a>
                </p>
                <span class="nieuws-date">Geplaatst op {{ date("d-m-Y", strtotime($newsItem->aangemaakt)) }}</span>
                <div class="textblok">{{ $newsItem->beschrijving }}</div>
            </div>
        @endforeach
    </div>
</div>

@endsection