<?php

namespace App;

class Workspace extends BaseModel
{
    protected $table = 'workspaces';
    protected $fillable = ['name', 'size'];

    public function Reservations() {
        return  $this->belongsToMany('App\Reservation','reservation_workspace','workspace_id','reservation_id');
    }

    public function scopeReservations($query, $tableID) {

        // Op MySQLWorkbench werkt deze query wel
        return $query->join('reservation_workspace', 'reservation_workspace.workspace_id', '=', 'workspaces.id')
            ->join('reservation', 'reservation.workspace_id', '=', 'workspaces.id')
            ->join('users', 'users.id', '=', 'reservation.user_id')
            ->where('workspaces.id', '=', $tableID)
            ->orderBy('date_in', 'asc')
            ->select('reservation.date_in', 'reservation.date_out', 'users.name');

//        Rauwe paste, kan je hem testen:
//        SELECT r.date_in, r.date_out, u.`name`
//        FROM workspaces as w
//        join reservation_workspace as rw on rw.workspace_id = w.id
//        join reservation as r on rw.reservation_id = r.id
//        join users as u on u.id = r.user_id where w.id = 50;
    }

}


