<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sponsor;

class SponsorController extends Controller
{
    // Return the SponserView with the sponsors.
    public function getSponsorPage() {
        $sponsors = Sponsor::all();
        return view('sponsor', compact('sponsors'));
    }
}
