<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\reservation_workspace;
use App\Workspace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class WorkplaceController extends Controller
{

    public function getWorkspacePage()
    {
        $workspaces = Workspace::all();
        return view('werkplaats.werkplaats-overzicht', compact('workspaces'));
    }

    public function getDetailedWerkplaats($id)
    {
        $occupation = reservation_workspace::occupation($id)->get();;
        $selectedWorkspace = Workspace::findOrFail($id);

        return view('werkplaats.Calender', compact('occupation', 'selectedWorkspace'));
    }

    function getDayplanning($currentDay, $id)
    {
        $data['occupation'] = reservation_workspace::Occupationday($id, $currentDay)->get();
        $data['day'] = $currentDay;
        $data['id'] = $id;
        $data['workspace'] = Workspace::findOrFail($id);
        $data['user'] = reservation_workspace::User($id, $currentDay)->get();

        return view('werkplaats.dagPlanning', compact('data'));
    }

    function saveToDatabase()
    {
        $date = date('Y-m-d H:i:s');
        $dateLater = date('Y-m-d H:i:s', strtotime($date . '+1 hour'));
        DB::table('reservation')->insert(
            array('date_in' => $date, 'date_out' => $dateLater, 'user_id' => auth()->id())
        );
    }

    function createReservation(Request $request)
    {
        $start = $request->dag . " " . $request->start . ":00";
        $end = $request->dag . " " . $request->end . ":00";
        $reserveringen = reservation_workspace::Occupationday($request->werkplaats, $request->dag)->get();;

        if(isset($reserveringen)) {
            foreach ($reserveringen as $reservering) {

                if($start < $reservering->date_in && $end > $reservering->date_in) {
                    return redirect()->back()->with(session()->flash('reservationBAD', 'Reserveren is mislukt!'));
                }
                if($start == $reservering->date_in) {
                    return redirect()->back()->with(session()->flash('reservationBAD', 'Reserveren is mislukt!'));
                }
                if($start < $reservering->date_in && $end > $reservering->date_in) {
                    return redirect()->back()->with(session()->flash('reservationBAD', 'Reserveren is mislukt!'));
                }
                if($start > $reservering->date_in && $start < $reservering->date_out) {
                    return redirect()->back()->with(session()->flash('reservationBAD', 'Reserveren is mislukt!'));
                }
            }
        }

        $reservation = new Reservation();
        $reservation->date_in = $start;
        $reservation->date_out = $end;
        $reservation->user_id = auth()->id();
        $reservation->save();
        $id = $reservation->id;
        reservation_workspace::create(['reservation_id' => $id, 'workspace_id' => $request->werkplaats]);

        return redirect()->back()->with(session()->flash('reservationOK', 'Reserveren is gelukt!!'));
    }

    function myReservations()
    {
        $reservations = Reservation::MyReservations()->get();
        return view('werkplaats.mijn-reserveringen', compact('reservations'));
    }

    function deleteReservation($id)
    {
        $isOwner = false;
        $reservations = Reservation::MyReservations()->get();

        foreach ($reservations as $res) {
            if ($res->id == $id) {
                $isOwner = true;
            }
        }

        if ($isOwner == true) {
            $toDelete = Reservation::find($id);
            $toDelete->delete();
        }
        return redirect('mijn-reserveringen');

    }
}
