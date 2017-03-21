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
                        createTimeSlots("9:00", 5, "startTime");

                        ?>

                        <?php
                        createTimeSlots("10:00", 7, "endTime");

                        ?>
                    </div>
                </div>

                <a href="{{action('WorkplaceController@saveToDatabase')}}"><input type="button" value="Reserveer"/></a>

            </div>


        </div>

    </div>


@endsection



<?php

use App\Reservation;

function createTimeSlots($startTime, $amountOfHours, $name)
{
    $startTime = date('H:i', strtotime($startTime));
    echo "<select id=$name>";
    for ($i = 0; $i < $amountOfHours; $i++) {
        echo "<option value=$startTime>$startTime</option>";
        $startTime = date('H:i', strtotime($startTime . '+1 hour'));
    }
    echo "</select>";
}

function saveReservation()
{
    $date = date('Y-m-d H:i:s');
    $dateLater = date('Y-m-d H:i:s', strtotime($date . '+1 hour'));

    DB::table('reservation')->insert(
        array('date_in' => $date, 'date_out' => $dateLater, 'user_id' => 3)
    );
}

?>
