@extends('layouts.website')
@section('content')

    <div class="container">
        @include('werkplaats.Calender')
    </div>
    <?php
    $calender = new Calender($occupation, $selectedWorkspace);
    echo $calender->show();
    ?>
@endsection