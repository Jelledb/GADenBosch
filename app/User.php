<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
protected $table = 'users';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','isfriend','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role() {
        return Role::where('id', $this->role_id)->get()[0];
    }

    /**
     * @return bool whether the user is admin
     */
    public function isAdmin() {
        return $this->role()->rolename == 'admin';
    }
}
