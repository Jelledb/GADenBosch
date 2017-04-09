<?php

namespace App;

class Reservation extends BaseModel
{
    protected $table = "reservation";
    protected $fillable = ['date_in', 'date_out', 'user_id'];

}
