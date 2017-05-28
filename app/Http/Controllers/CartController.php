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
        $payment = Mollie::api()->payments()->get(request('id'));
        if ($payment->isPaid()) {
            $toRemove = new product_users();
            $toRemove->remove($productid);

            $productsInCart = Product::ProductsInCart()->get();
        }

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

        $totalprice = 0;
        $productsInCart = Product::ProductsInCart()->get();
        foreach($productsInCart as $product){
            $totalprice= $totalprice + $product->price;
        }

        if (Auth::check()) {
            $user = Auth::user();
            $customer = Mollie::api()->customers()->create([
                "name" => $user->name,
                "email" => $user->email,
            ]);

            $payment = Mollie::api()->payments()->create([
                "amount" => $totalprice,
                'customerId' => $customer->id,
                'recurringType' => 'first',
                "description" => "Betaling GA Den Bosch",
                "redirectUrl" => "http://gadenbosch.ga/cart-redirect",
                "webhookUrl" => 'http://gadenbosch.ga/winkel-webhook/' . $toPurchase -> id,
            ]);

            return Redirect::to($payment->getPaymentUrl());
        }
        return Redirect::route('login')->with('message', 'Log eerst in of registreer als u nog geen account heeft');
        //return view('product.orders', compact('products'));
    }

    function showOrders() {
        $products = Product::order()->get();
        return view('product.orders', compact('products'));
    }


    public function paymentRedirect()
    {
        if (Product::ProductsInCart()->get() == 0)
            return Redirect::route('myCart')->with('success', 'De betaling is gelukt!');
        else
            return Redirect::route('myCart')->with('fail', 'De betaling is mislukt!');
    }

    function removeOrder(){

        $toRemove = new product_users();
        $toRemove->removeOrder();
        return redirect()->route('/myCart');

    }
}
