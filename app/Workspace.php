<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workspace extends Model
{
    protected $table = 'workspaces';
    function Reservation(){
        $this->belongsToMany('App\Workspace');
    }
    function scopeWorkspace($query,$id){
        return $query->join('reservation_workspace','workspace_id','=','workspaces.id' )
            ->where('workspaces.id','=', $id)
                ->select('workspaces.*');

    }

}
