<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use app\expos;

class AgendaController extends Controller
{
    public function getExpositions(){
        //$expositions = expos::all();
        return view('agenda', compact('expositions'));
    }
}
