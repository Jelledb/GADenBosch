@extends('layouts.website')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <h1 class="centerH1">Vriend worden?</h1>
                    <br>
                    <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a congue nibh, ac condimentum
                        metus.
                        Ut nec lectus non mi aliquet volutpat et sit amet sapien. Fusce at auctor urna. Nunc nisi massa,
                        consectetur non neque eu, faucibus tempus ante. Quisque vitae dui eu nibh feugiat aliquet a at
                        neque. Nulla ac sapien sit amet nibh venenatis posuere. Nulla eget scelerisque elit. Aliquam
                        ornare
                        posuere nunc, nec pharetra elit gravida vitae. Sed viverra tempor urna quis egestas.
                        <br><br>
                        Vriend van het GA ben je al vanaf € 45,- per jaar, maar een groter bedrag is meer dan welkom.
                        <br>

                        <div class="wrapper-btn">
                            @if (Auth::check() && Auth::user()->isfriend == 1)
                            <button type="button" class="btn btn-default" id="vriend-btn"><a id="vriend-a" href="/vriend-worden-pay">U bent al een vriend</a></button>
                        @else
                                <button type="button" class="btn btn-default" id="vriend-btn"><a id="vriend-a" href="/vriend-worden-pay">Ja, ik word vriend!</a></button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
