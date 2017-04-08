<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\expositions;

class AgendaItemController extends Controller
{
    /**
     * @param $id
     * @return view
     */
    public function getExpositionItem($id){
        $exposition = expositions::where('id', $id)
            ->take(1)
            ->get();
        return view('agendaitem')->with('specificExposition', $exposition);
    }
}
