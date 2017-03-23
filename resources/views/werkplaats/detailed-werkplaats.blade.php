@extends('layouts.website')
@section('content')

    <div class="container">
        @include('werkplaats.Calender')
    </div>

        <?php
        $calender = new Calender($werkplaatsid[0]);
        echo $calender->show();

        ?>
        {{ $werkplaatsid[0] }}

    </div>

@endsection