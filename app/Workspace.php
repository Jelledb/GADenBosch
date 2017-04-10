<?php

namespace App;

class Workspace extends BaseModel
{
    protected $table = 'workspaces';
    protected $fillable = ['name', 'size'];

    function Reservation(){
        $this->belongsToMany('App\Workspace');
    }
    function scopeWorkspace($query,$id){
        return $query->join('reservation_workspace','workspace_id','=','workspaces.id' )
            ->where('workspaces.id','=', $id)
                ->select('workspaces.*');


    }
}
