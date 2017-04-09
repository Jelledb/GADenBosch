<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\expositions;

class ArchiveAgendaController extends Controller
{
    public function getArchiveAgenda(){
        $expositions = expositions::whereDate('date_to', '<', date('Y-m-d'))
            ->get()
            ->reverse();
        return view('archief-agenda')->with('ArchiveExpos', $expositions);
    }
}
