@extends('layouts.website')

@section('content')
<div class="container">
    <div class="row">


        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Werkplaatsen</li>
        </ol>
        <div class="col-md-3">
            <div data-toggle="tooltip" title="selecteer een werkplaats uit de onderstaande knoppen"  class="panel panel-default">
                <div>
                    <h2  class="text-center">Werkplaatsen</h2>
                    <br/>
                </div>
                <div class="workspaces">
                    <br/> <br/>
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
                <h2  class="text-center">Plattegrond</h2>
                <br>
                <img src="{{asset('images/werkplaats-overzicht.png')}}" alt="plattegrond" class="plattegrond" >
            </div>
        </div>
    </div>
</div>
</div>
@endsection