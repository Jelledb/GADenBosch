@extends('layouts.website')

@section('content')

    <div class="container">
        @if(Session::has('success'))
        <div class="alert alert-success">De betaling is gelukt! U bent nu vriend van GA Den Bosch</div>
        @elseif(Session::has('fail'))
            <div class="alert alert-warning">Betaling is mislukt</div>
        @endif
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <h3 class="centerH1">Vriend worden?</h3>


                    <div class="text">

                        {!! $vriend->content !!}

                        </div>
                    <div class="wrapper-btn">
                        @if (Auth::check() && Auth::user()->isfriend == 1)
                            <button type="button" class="btn btn-default" id="vriend-btn"><span id="vriend-a">U bent al een vriend</span></button>
                        @else
                            <a type="button" class="btn btn-default" id="vriend-btnn" id="vriend-a" href="/vriend-worden-pay">Ja, ik word vriend!</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
