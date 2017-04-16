<?php

namespace App;

class Reservation extends BaseModel
{
    protected $table = "reservation";
    protected $fillable = ['date_in', 'date_out', 'user_id'];

    function Workspace(){
       return $this->belongsToMany('App\Workspace','reservation_workspace','reservation_id','workspace_id');

    }

    function scopeMyReservations(){



        return $this->where('user_id',auth()->id())->with('Workspace');
    }
}
