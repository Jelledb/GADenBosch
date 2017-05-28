<?php

namespace App\Http\Controllers;

use App\product_users;
use App\ProductUsersInfo;
use App\shoppingcart;
use App\Product;
use App\Users;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    function index()
    {


        $productsInCart = Product::ProductsInCart()->get();

        return view('product.myCart', compact('productsInCart'));
    }


    function removeFromCart($productid){


       $toRemove = new product_users();
       $toRemove->remove($productid);

        $productsInCart = Product::ProductsInCart()->get();


        return redirect()->route('/myCart');
    }
    function purchase(Request $request) {
        // get product users info.
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'zip_code' => 'required',
            'street' => 'required',
            'house_number' => 'required',
            'city' => 'required'
        ]);

        $info = ProductUsersInfo::create($request->all());
        $info->save();

        $toPurchase = new product_users();
        $toPurchase->purchase($info->id);

        $products = Product::order()->get();

        return view('product.orders', compact('products'));
    }

    function removeOrder(){
        $toRemove = new product_users();
        $toRemove->removeOrder();

        return redirect()->route('/myCart');
    }
}
