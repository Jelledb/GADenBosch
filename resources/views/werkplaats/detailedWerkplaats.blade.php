@extends('layouts.website')
@section('content')

    <div class="container">
        @include('werkplaats.Calender')
    </div>

        <?php
        $calender = new Calender();
        echo $calender->show();

        $lala = "<a href = dfasdfasdfasdfasdf";
        ?>



        {{ $id }}
    </div>

@endsection