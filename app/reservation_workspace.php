<?php

namespace App;

class reservation_workspace extends BaseModel
{
    protected $table = 'reservation_workspace';
    protected $fillable = ['reservation_id', 'workspace_id'];



    function scopeOccupation($query, $id)
    {

        return $query->join('reservation', 'reservation.id', '=', 'reservation_workspace.reservation_id')
            ->where('reservation_workspace.workspace_id', '=', $id)
            ->select('reservation.date_in', 'reservation.date_out');


    }
    function scopeOccupationday($query,$id,$day)
    {



        return $query->join('reservation', 'reservation.id', '=', 'reservation_workspace.reservation_id')
            ->where('reservation_workspace.workspace_id', '=', $id)->whereDate('reservation.date_in','=',$day)
            ->select('reservation.*');


    }

}
