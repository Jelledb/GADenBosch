@extends('layouts.website')

@section('content');

    <div class="container">
        @include('werkplaats.Calender')


<?php
        $calender = new Calender();
       echo $calender->show() ?>
        </div>