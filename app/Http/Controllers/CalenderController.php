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
        $data[0] = $currentDay;

        //dag object opvragen waar currentday



        return view('werkplaats.dagPlanning', $data[0]);
    }

}

function getDetailedWorkspace()
{
    return view('werkplaats.detailedWerkplaats');
}