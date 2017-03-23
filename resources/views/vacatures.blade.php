@extends('layouts.website')

@section('content')
    <?php
        $counter = 0;
    ?>


    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h1 class="centerH1">Vacatures</h1>
                <br>
                <div class="text">

                </div>
            </div>
        </div>
    </div>
        <div class="row">
            @foreach($vacatures as $vacature)
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <div id="item vacatureblok" class="nieuws-nu vacature">
                    <h2 class="arch">{{ $vacature->title}}</h2>
                    <div class="texblok">{{ $vacature->description }}</div>
                    <div class="leetsmeer arch"><a href="#">LEES VERDER &gt;</a></div>
                </div>

            </div>
            <div class="col-md-7"></div>
            @endforeach
        </div>
</div>





@endsection