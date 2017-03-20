<?php

namespace App\Http\Controllers;

use App\Workspace;
use Illuminate\Http\Request;

class WorkplaceController extends Controller
{
    //

    public function getWorkspacePage() {
        $workplaces = Workspace::all();
        return view('werkplaats.werkplaatsOverzicht', compact('workplaces'));
    }

    public function getDetailedWerkplaats() {
        return view('werkplaats.detailedWerkplaats');
    }

    function getDayplanning($currentDay)
    {
        $data[] = $currentDay;

        return view('werkplaats.dagPlanning', $data);
    }

}
