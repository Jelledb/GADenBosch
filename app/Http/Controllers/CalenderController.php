<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CalenderController extends Controller
{
    function getWorkplace(){

        return view('werkplaats.werkplaatsOverzicht');
    }

    function dayplanning(){

        return view('werkplaats.dagPlanning');
    }

}
