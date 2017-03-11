<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ShopController extends Controller
{
    public function getShopWindow() {
        $products = Product::all();
        return view('shop', compact('products'));
    }
}
