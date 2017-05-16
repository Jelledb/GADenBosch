<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class users extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


   function Product(){
        return $this->belongsToMany('App\Product');
        }

    public function Roles()
    {
        return $this->belongsToMany('App\Role');
    }

    public function IsAdmin() {
        if($this->role_id === 0) {
            return true;
        }
        return false;
    }
}
