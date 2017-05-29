<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductUsersInfo extends Model
{
    protected $table = 'product_users_info';
    public $timestamps = false;
    protected $fillable = ['id', 'first_name', 'last_name', 'email', 'phone_number', 'zip_code', 'street', 'house_number', 'city'];
}
