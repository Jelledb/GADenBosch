<?php

namespace App\Http\Controllers;

use App\sponsors;
use Illuminate\Http\Request;
use App\Sponsor;

class SponsorController extends Controller
{
    // Return the SponserView with the sponsors.
    public function getSponsorPage() {
        $sponsors = sponsors::all();
        return view('sponsor', compact('sponsors'));
    }
}
