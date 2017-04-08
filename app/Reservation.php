<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Reservation extends Model
{
    protected $table = 'reservation';
    function Workspace(){
        $this->belongsToMany('App\Workspace');
    }


}
