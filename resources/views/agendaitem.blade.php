@extends('layouts.website')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @foreach($specificExposition as $expos)
                    <div class="panel panel-default">
                        <div>
                            @if($expos->title != null)
                                <h1 class="centerH1">{!! $expos->title !!}</h1>
                            @endif
                            <br />
                            @if($expos->subtitle != null)
                                <h2 class="h2">{!! $expos->subtitle !!}</h2>
                            @endif
                            {!! $expos->text !!}

                            @if($expos->extra != null)
                                <p>Let op: {!! $expos->extra !!}</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection