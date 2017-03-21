<?php

namespace App\Http\Controllers;

use App\Workspace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    function saveToDatabase() {
        $date = date('Y-m-d H:i:s');
        $dateLater = date('Y-m-d H:i:s', strtotime($date . '+1 hour'));

        DB::table('reservation')->insert(
            array('date_in' => $date, 'date_out' => $dateLater, 'user_id' => 3)
        );
    }

}
