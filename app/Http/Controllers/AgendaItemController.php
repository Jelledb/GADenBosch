<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expositions;

class AgendaItemController extends Controller
{
    /**
     * @param $id
     * @return view
     */
    public function getExpositionItem($id){
        $exposition = Expositions::where('id', $id)
            ->take(1)
            ->get();
        return view('agendaitem')->with('specificExposition', $exposition);
    }
}
