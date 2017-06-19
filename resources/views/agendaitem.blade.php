@extends('layouts.website')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @foreach($specificExposition as $expos)
                    <div class="panel panel-default">
                        <div style="padding:10px">
                            @if($expos->title != null)
                                <h2 class="centerH1">{!! $expos->title !!}</h2>
                            @endif
                            <br />
                            @if($expos->subtitle != null)
                                <h3 class="h2">{!! $expos->subtitle !!}</h3>
                            @endif

                                @if($expos->opening != '0000-00-00' && $expos->opening_time != null)
                                    <h3 class="h2">Openingsdatum: {!! $expos->opening !!} {!! $expos->opening_time !!}</h3>
                                @endif
                            {!! $expos->text !!}

                            @if($expos->extra != null)
                                <br />
                                <br />
                                <p>Let op: {!! $expos->extra !!}</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection