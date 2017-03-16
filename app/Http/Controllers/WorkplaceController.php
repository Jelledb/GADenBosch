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

    public function getDetailedPage($id) {
        return view('werkplaats.detailedWerkplaats', compact('id'));
    }
}
