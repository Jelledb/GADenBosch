<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expositions;

class ArchiveAgendaController extends Controller
{
    public function getArchiveAgenda(){
        $expositions = Expositions::whereDate('date_to', '<', date('Y-m-d'))
            ->get()
            ->reverse();
        return view('archief-agenda')->with('ArchiveExpos', $expositions);
    }
}
