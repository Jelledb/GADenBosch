<?php

namespace App;

class Workspace extends BaseModel
{
    protected $table = 'workspaces';
    protected $fillable = ['name', 'size'];

    public function Reservations(){
      return  $this->belongsToMany('App\Reservation','reservation_workspace','workspace_id','reservation_id');
    }
    function scopeWorkspace($query,$id){
        return $query->join('reservation_workspace','workspace_id','=','workspaces.id' )
            ->where('workspaces.id','=', $id)
                ->select('workspaces.*');


    }
}
