@extends('layouts.website')

@section('content')
<div class="container">
    <div class="row">


        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Werkplaatsen</li>
        </ol>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div>
                    <h1 class="text-center">Werkplaatsen</h1>
                    <br/>
                </div>
                <div class="workspaces">
                    Klik op een van de werkplaatsen om te beginnen met reserveren! <br/> <br/>
                    <ul>
                        @foreach($workspaces as $workspace)
                            <ul>
                                <a class="{{ $workspace->name }}" href="{{url("detailed-werkplaats/".$workspace->id)}}">{{$workspace->name . " " . $workspace->size}}</a>
                            </ul>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <h1 class="text-center">Plattegrond</h1>
                <br>
                <img src="{{asset('images/werkplaats-overzicht.png')}}" alt="plattegrond" class="plattegrond">
            </div>
        </div>
    </div>
</div>
</div>
@endsection