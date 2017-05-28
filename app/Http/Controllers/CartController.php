<?php

namespace App\Http\Controllers;

use App\product_users;
use App\shoppingcart;
use App\Product;
use App\Users;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Mollie\Laravel\Facades\Mollie;


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
    function purchase(){
        $toPurchase = new product_users();
        $toPurchase->purchase();

        $products = Product::order()->get();

        $totalprice = null;
        $productsInCart = Product::ProductsInCart()->get();
        foreach($productsInCart as $product){
            $totalprice= $totalprice + $product->price;
        }
        dd($totalprice);
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
