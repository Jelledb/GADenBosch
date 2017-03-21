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

    public function getDetailedWerkplaats($id) {
        $werkplaatsid[] = $id;
        return view('werkplaats.detailedWerkplaats', compact('werkplaatsid'));
    }

    function getDayplanning($currentDay, $id)
    {
        $data["day"] = $currentDay;
        $data["id"] = $id;
        return view('werkplaats.dagPlanning', $data);
    }

}
