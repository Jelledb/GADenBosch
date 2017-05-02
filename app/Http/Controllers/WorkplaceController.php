<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\reservation_workspace;
use App\Workspace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkplaceController extends Controller
{
    //

    public function getWorkspacePage() {
        $workplaces = Workspace::all();
        return view('werkplaats.werkplaats-overzicht', compact('workplaces'));
    }

    public function getDetailedWerkplaats($id) {


         $occupation =  reservation_workspace::occupation($id)->get();;

         $selectedWorkspace = Workspace::workspace($id)->get();


        return view('werkplaats.Calender', compact('occupation','selectedWorkspace'));
    }

    function getDayplanning($currentDay, $id)
    {   $data['occupation'] =  reservation_workspace::Occupationday($id,$currentDay)->get();;
        $data['day'] = $currentDay;
        $data['id'] = $id;
        $data['workspace'] = Workspace::find($id);


        return view('werkplaats.dagPlanning', compact('data'));
    }

    function saveToDatabase() {
        $date = date('Y-m-d H:i:s');
        $dateLater = date('Y-m-d H:i:s', strtotime($date . '+1 hour'));

        DB::table('reservation')->insert(
            array('date_in' => $date, 'date_out' => $dateLater, 'user_id' => auth()->id())
        );
    }

    function createReservation(Request $request) {

        $start = $request->dag . " " . $request->start . ":00";
        $end = $request->dag . " " . $request->end . ":00";
        // TODO AUTH
        // $user = $request->gebruiker;

        $reservation = new Reservation();
        $reservation->date_in = $start;
        $reservation->date_out = $end;
        $reservation->user_id = auth()->id();

        $reservation->save();

        $id = $reservation->id;

        reservation_workspace::create(['reservation_id' => $id, 'workspace_id' => $request->werkplaats]);

        return redirect('werkplaats-overzicht');
    }
    function myReservations(){
        $reservations = Reservation::MyReservations()->get();

        return view('werkplaats.mijn-reserveringen',compact('reservations'));
    }
}
