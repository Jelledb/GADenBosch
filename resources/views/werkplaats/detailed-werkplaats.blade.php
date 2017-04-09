@extends('layouts.website')
@section('content')

    <div class="container">
        @include('werkplaats.Calender')
    </div>

    <?php
    $calender = new Calender($workplace->id);
    echo $calender->show();


    ?>

    {{ $workplace->id }}

    {{ $workplace->name }}
    {{ $workplace->size }}




@endsection