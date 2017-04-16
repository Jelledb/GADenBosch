@extends('layouts.website')

@section('content')


    <div class="container">

        @foreach($reservations as $res)
            <?php
                echo $res->Workplace->name
            ?>
            @endforeach


        </div>
@endsection