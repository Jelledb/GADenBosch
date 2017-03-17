<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CalenderController extends Controller
{
    function getWorkplace()
    {

        return view('werkplaats.werkplaatsOverzicht');
    }

    function getDayplanning($currentDay)
    {
        $data = $currentDay;

        return view('werkplaats.dagPlanning', $data);
    }

}

function getDetailedWorkspace()
{
    return view('werkplaats.detailedWerkplaats');
}