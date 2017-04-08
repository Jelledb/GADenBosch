@extends('layouts.website')

@section('content')
    <div class="container">
        <div class="row">
            <h2>{{$vacature->title}}</h2>
        </div>
        <div class="row">
            <p>{{$vacature->datum}}</p>
        </div>
        <div class="row">
            <p>{{$vacature->description}}</p>
        </div>
        <div class="row">
            <p>
                heeft u intresse mail ons op: <a href="mailto:info@gadenbosch.nl">info@gadenbosch.nl</a> of bel ons op: <a href="tel:+31736134277">073 613 4277</a>
            </p>
        </div>
    </div>
@endsection