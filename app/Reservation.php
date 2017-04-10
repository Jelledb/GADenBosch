<?php

namespace App;

class Reservation extends BaseModel
{
    protected $table = "reservation";
    protected $fillable = ['date_in', 'date_out', 'user_id'];

    function Workspace(){
        $this->belongsToMany('App\Workspace');
    }
}
