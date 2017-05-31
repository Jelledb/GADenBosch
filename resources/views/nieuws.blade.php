@extends('layouts.website')

@section('content')

    <div class="container nieuws-overzicht-home zoomable">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div>
                    <div>
                        <h1 class="centerH1">Nieuwsberichten</h1>
                    </div>
                    @foreach($newsItems as $newsItem)
                        <div class="nieuws-item-home panel panel-default">
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
        </div>
    </div>

@endsection