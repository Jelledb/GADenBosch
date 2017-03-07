<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Cart;

class ProductsController extends Controller
{
    public function getAddToCart(Request $request, $id)
    {

        $product = Products::find($id);
        $oldCart = Session('cart');


        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);


        $request->session()->put('cart', $cart);
        Session::save();

        dd($request->session()->get('cart'));
    }
}