<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CalenderController extends Controller
{
    function getWorkplace(){

        return view('werkplaats.werkplaatsOverzicht');
    }

    function getdayplanning($currentDay){
        $data = $currentDay;

        return view('werkplaats.dagPlanning',$data);
    }

}
