@extends('layouts.website')

@section('content');
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Werkplaatsen</li>
            </ol>

            <div class="panel panel-default">
                <div>
                    <h1 class="centerH1">Werkplaatsen</h1>
                    <br/>
                </div>
                <div class="workspaces">
                    Klik op een van de werkplaatsen om te beginnen met reserveren! <br /> <br />
                    <ul>
                        @foreach($workspaces as $workspace)
                            <ul>
                                <a class="{{ $workspace->name }}" href="{{url("detailed-werkplaats/".$workspace->id)}}">{{$workspace->name . " " . $workspace->size}}</a>
                            </ul>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="panel panel-default">
                <img src="{{asset('images/werkplaats-overzicht.png')}}" alt="plattegrond" width="750px" height="400px">
            </div>
        </div>
    </div>
</div>
@endsection