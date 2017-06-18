<?php

namespace App;

class reservation_workspace extends BaseModel
{
    protected $table = 'reservation_workspace';
    protected $fillable = ['reservation_id', 'workspace_id'];


    function reservation()
    {
        return $this->belongsTo('App\Reservation');
    }


    function scopeOccupation($query, $id)
    {
        return $query->join('reservation', 'reservation.id', '=', 'reservation_workspace.reservation_id')
            ->where('reservation_workspace.workspace_id', '=', $id)
            ->select('reservation.*');
    }

    function scopeOccupationday($query, $id, $day)
    {
        return $query->join('reservation', 'reservation.id', '=', 'reservation_workspace.reservation_id')
            ->where('reservation_workspace.workspace_id', '=', $id)
            ->whereDate('reservation.date_in', '=', $day)
            ->orderBy('date_in', 'asc')
            ->select('reservation.*');

    }

    function scopeUser($query, $id, $day)
    {
        return $query->join('reservation', 'reservation.id', '=', 'reservation_workspace.reservation_id')
            ->join('users', 'users.id', '=', 'reservation.user_id')
            ->where('reservation_workspace.workspace_id', '=', $id)->whereDate('reservation.date_in', '=', $day)
            ->select('users.*');
    }

    function scopeReservist($query, $id) {
        return $query->join('reservation', 'reservation.id', '=', 'reservation_workspace.reservation_id')
            ->join('users', 'users.id', '=', 'reservation.user_id')
            ->join('workspaces', 'workspaces.id', '=', 'reservation_workspace.workspace_id')
            ->where('workspaces.id', '=', $id)
            ->select('users.*', 'reservation.*');
    }

}
