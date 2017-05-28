<?php

namespace App;

use Illuminate\Support\Facades\Auth;

class Product extends BaseModel
{
    protected $table = 'products';

    //

    protected $fillable = [
        'name', 'description_long', 'description_short', 'image', 'price', 'alt'
    ];

    function users()
    {
        return $this->belongsToMany('App\Users');
    }

    public function getNameAtrribute($value)
    {
        return ($value);
    }

    public function scopeProductsInCart($query)
    {

        return $query->join('product_users', 'product_id', '=', 'id')
            ->join('users', 'users.id', '=', 'product_users.users_id')
            ->where('users.id', '=', $id = Auth::id())->where('product_users.isorder','=','0')->select('products.*');
    }

    public function scopeSearch($query, $searchString)
    {

        return $query->where('name', $searchString)
            ->orWhere('name', 'like', '%' . $searchString . '%');

    }
    function scopeOrder($query){

        return $query->join('product_users', 'product_id', '=', 'id')
            ->join('users', 'users.id', '=', 'product_users.users_id')
            ->where('users.id', '=', $id = Auth::id())->where('product_users.isorder','=','1')->select('products.*');
    }
}
