@extends('layouts.website')

@section('content')
    <div class="container nieuws-item">
        <h2>{{ $newsItem->titel }}</h2>
        <p class="nieuws-date">Geplaatst op {{ $newsItem->aangemaakt }}</p>

        <div class="row">
            <div class="col-md-6">
                <p>{{ $newsItem->tekst }}</p>
            </div>
            <div class="col-md-6 nieuws-item-foto-groot">
                <img src="http://placehold.it/600x300">
            </div>
        </div>

    </div>
@endsection