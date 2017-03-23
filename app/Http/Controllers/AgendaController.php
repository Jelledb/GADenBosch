<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\expositions;

class AgendaController extends Controller
{
    public function getExpositions(){
        $expositions = expositions::all();
        return view('agenda')->with('allExpositions', $expositions);
    }
}
