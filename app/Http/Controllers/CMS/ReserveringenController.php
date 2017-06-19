<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Workspace;
use App\reservation_workspace;
use App\Reservation;

class ReserveringenController extends Controller
{

    public function showView() {
        $data['workspaces'] = Workspace::all();
        return view('cms.reserveringen.index', compact('data'));
    }

    public function getReservationsFrom($id) {
        $data['workspaceID'] = $id;
        $data['workspaces'] = Workspace::all();
        $data['reservist'] = reservation_workspace::reservist($id)->get();

        return view('cms.reserveringen.index', compact('data'));
    }
    public function deleteReservation($id){

        $toDelete = Reservation::find($id);
        $toDelete->delete();

        return redirect()->back()->with('success', 'De reservering is verwijderd.');
    }

}
