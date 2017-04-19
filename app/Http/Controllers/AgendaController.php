<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expositions;

class AgendaController extends Controller
{
    public function getExpositions(){
        $expositions = Expositions::whereDate('date_to', '>=', date('Y-m-d'))
            ->where('toon', '=', 'yes')
            ->get();
        return view('agenda')->with('allExpositions', $expositions);
    }
}
