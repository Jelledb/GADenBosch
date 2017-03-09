<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class MenuController extends Controller
{
    public function cmshome()
    {
        return view('cms/cmshome');
    }
    //

    public function friendPage() {
        $products = Products::all();
        return view('friends.overzicht', compact('products'));
    }
}
