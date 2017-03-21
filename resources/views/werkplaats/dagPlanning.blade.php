@extends('layouts.website')


@section('content')

    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <h1 class="centerH1">Reserveer</h1>
                <br/>
                <div class="row justify-content-md-center">
                    <div class="col-md-4">
                        <?php
                        createTimeSlots("9:00", 5);

                        ?>

                        <?php
                        createTimeSlots("10:00", 7);

                        ?>
                    </div>
                </div>

                <input type="button" value="Reserveer"/>

            </div>


        </div>

    </div>


@endsection



<?php

use App\Reservation;

function createTimeSlots($startTime, $amountOfHours)
{
    $startTime = date('H:i', strtotime($startTime));
    echo "<select>";
    for ($i = 0; $i < $amountOfHours; $i++) {
        echo "<option value=$startTime>$startTime</option>";
        $startTime = date('H:i', strtotime($startTime . '+1 hour'));
    }
    echo "</select>";
}

function saveReservation()
{
//    $reservation = new Reservation();
//
//    DB::table('reservation')->insert(
//      array('date_in' => )
//    );
}

?>
