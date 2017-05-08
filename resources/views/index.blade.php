@extends('layouts.website')

@section('content')
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="{{asset('images/hp_home1.jpg')}}" alt="home1" style="width:100%;">
            </div>

            <div class="item">
                <img src="{{asset('images/hp_home2.jpg')}}" alt="Home2" style="width:100%;">
            </div>

            <div class="item">
                <img src="{{asset('images/hp_home5.jpg')}}" alt="Home5" style="width:100%;">
            </div>

            <div class="item">
                <img src="{{asset('images/hp_werkplaatsfoto web 4.jpg')}}" alt="Werkplaatsfoto" style="width:100%;">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left fa fa-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right fa fa-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container">
    <div class="nieuws-overzicht-home">
        <h2>Laatste nieuws</h2>
        <div>
            <a href="/nieuws">Klik hier om alle nieuwsberichten te lezen</a>
        </div>

        @foreach($newsItems as $newsItem)
            <div class="nieuws-item-home panel panel-default col-md-6">
                <div class="nieuws-item-foto">
                    @if($newsItem->foto)
                        <img src="{{ $newsItem->foto }}">
                    @endif
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