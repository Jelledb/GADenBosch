@extends('layouts.website')

<?php



?>



@section('content');

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div>
                    <h1 class="centerH1">Werkplaatsen</h1>
                    <br/>
                </div>
                <div class="workspaces">
                    <ul>
                        @foreach($workplaces as $workplace)

                            <li>
                                <a href="{{url("detailed-werkplaats/".$workplace->id)}}">{{$workplace->name . " " . $workplace->size}}</a>
                            </li>

                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="panel panel-default">
                {{--{!! Html::image(asset('images/werkplaats-overzicht.png')) !!}}--}}
                <img src="{{asset('images/werkplaats-overzicht.png')}}" alt="image" width="750px" height="400px">
            </div>
        </div>
    </div>
</div>

@endsection