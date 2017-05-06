<?php

namespace App;

class Reservation extends BaseModel
{
    protected $table = "reservation";
    protected $fillable = ['date_in', 'date_out', 'user_id'];

    function User()
    {
        return $this->belongsTo('App\User');
    }

    function Workspace()
    {
        return $this->belongsToMany('App\Workspace', 'reservation_workspace', 'reservation_id', 'workspace_id');
    }

    function scopeMyReservations()
    {
        return $this->where('user_id', auth()->id())->with('Workspace');
    }

    function scopeUser($id)
    {
        return $this->join('user', 'user.id', '=', 'reservation.user_id')->where('reservation.user.id', '=', $id)->select('user.*');
    }
}
