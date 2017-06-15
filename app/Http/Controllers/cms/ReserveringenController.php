<?php

namespace App\Http\Controllers\cms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReserveringenController extends Controller
{

    public function showView() {
        return view('cms.reserveringen.index');
    }

    public function getReservationsFrom($id) {

        $reservations = DB::table('reservation_workspace')
            ->join('reservation', 'reservation_workspace.reservation_id', '=', 'reservation.id')
            ->join('workspaces', 'reservation_workspace.workspace_id', '=', 'workspaces.id')
            ->join('users', 'users.id', '=', 'reservation.user_id')
            ->where('reservation_workspace.workspace_id', '=', $id)
            ->get();


//            SELECT *  FROM reservation_workspace as rw join reservation as r on rw.reservation_id = r.id join
//        workspaces as w on rw.workspace_id = w.id join users as u on u.id = r.user_id;

        //$reservations = Workspace::fi

        dd($reservations);
    }

}
