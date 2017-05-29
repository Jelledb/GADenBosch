<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class product_users extends Model
{
    public $timestamps = false;

    function Product()
    {
        return $this->hasMany('App\Product', 'id', 'product_id');
    }

    function Users()
    {
        return $this->hasMany('App\Users', 'id', 'users_id');
    }

    function Remove($productid)
    {

        $inq = DB::table('product_users')->where('product_id', $productid)->where('users_id', Auth::id())->select('product_users.num')->first();

        DB::table('product_users')->where('num', '=', $inq->num)->delete();

    }

    function RemoveEntireCart()
    {

        $inq = DB::table('product_users')->where('users_id', Auth::id())->select('product_users.num')->get();

        foreach ($inq as $i) {

            DB::table('product_users')->where('num', '=', $i->num)->delete();
        }

    }

    function purchase()
    {

        $inq = DB::table('product_users')->where('users_id', Auth::id())->update(['isorder' => '1']);
    }


    function removeOrder()
    {
        $inq = DB::table('product_users')->where('users_id', Auth::id())->update(['isorder' => '0']);

    }


}


