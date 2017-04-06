@extends('layouts.website')
@section('content')

    <div class="container">
        @include('werkplaats.Calender')
    </div>

        <?php
        $calender = new Calender($occupation,$workspace);
        echo $calender->show();

        ?>


    </div>

@endsection