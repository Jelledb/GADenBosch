<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservation';
    function Workspace(){
        $this->belongsToMany('App/Workspace');
    }
    function scopeOccupation($query,$id){

        return $query->join('reservation_workspace','workspace_id','=','reservation.id' )
            ->where('reservation.id','=', $id)
        ->select('reservation.date_in','reservation.date_out');
}

}
