<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservation_workspace extends Model
{
    protected $table = 'reservation_workspace';

    function Reservation()
    {
        $this->hasMany('App\Reservation', 'id', 'reservation_id');
    }

    function workspace()
    {
        $this->hasMany('App\Workspace', 'id', 'workspace_id');
    }

    function scopeOccupation($query, $id)
    {

        return $query->join('reservation', 'reservation.id', '=', 'reservation_workspace.reservation_id')
            ->where('reservation_workspace.workspace_id', '=', $id)
            ->select('reservation.date_in', 'reservation.date_out');


    }

}
