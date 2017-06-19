@extends('layouts.website')
@section('content')

    <div class="container zoomable">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-heading"><h3 style="text-align: center">{{ $product->name }}</h3></div>

                    <div class="panel-body">
                        <div>
                            {!! Html::image(asset("images/".$product->image)) !!}
                            <br>
                            <br>

                            <h4>Prijs</h4>
                            <h5>€ {{ $product->price }}</h5>
                            <br>
                            <br>
                            <div class="beschrijving">
                                <h4>Beschrijving</h4>
                               {{ $product->description_long }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection