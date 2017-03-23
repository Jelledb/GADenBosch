<?php

namespace App\Http\Controllers;

use App\vacatures;
use Illuminate\Http\Request;

class VacatureController extends Controller
{
    // Return the SponserView with the sponsors.
    public function getVacaturePage() {
        $vacatures = vacatures::all();
        return view('vacatures', compact('vacatures'));
    }
}
