@extends('layouts.website')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-heading"><h1 style="text-align: center">{{ $product->name }}</h1></div>

                    <div class="panel-body">
                        <div>


                            {!! Html::image(asset("images/".$product->image)) !!}

                            {{--<img src="/storage/app/jNmGYqMpTB1Vzphp arthkFxtzxJRKTzwkOygvpsZTQPFQ.jpeg" alt="lala" />--}}

                            {{--<img src="{!! asset('../app/'.$product->image) !!}" alt="Image"/>--}}
                            {{--//echo   '<img src=/"' . $product->image . '" alt ="' . $product->alt . '" class="image" />';--}}
                            {{--{{dd($product)}}--}}



                            <br>
                            <br>

                            <h2>Prijs</h2>
                            <h3>{{ $product->price }}</h3>
                            <br>
                            <br>
                            <div class="beschrijving">
                                <h2>Beschrijving</h2>
                               {{ $product->description_long }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection