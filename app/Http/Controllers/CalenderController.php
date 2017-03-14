<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CalenderController extends Controller
{
    function getDetail(){

        return view('werkplaats.werkplaatsOverzicht');
    }

}
