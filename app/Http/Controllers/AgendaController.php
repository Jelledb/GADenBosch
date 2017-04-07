<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\expositions;

class AgendaController extends Controller
{
    public function getExpositions(){
        $expositions = expositions::whereDate('date_to', '>=', date('Y-m-d'))
            ->where('toon', '=', 'yes')
            ->get();
        return view('agenda')->with('allExpositions', $expositions);
    }
}
