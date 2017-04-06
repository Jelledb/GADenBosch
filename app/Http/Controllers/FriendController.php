<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Mollie\Laravel\Facades\Mollie;

class FriendController extends Controller
{

    public function create() {
        return view('wordVriend');
    }

    public function becomeFriend() {
        // Mollie shit doen hier
        // payment aanmaken
        if(Auth::check()) {
            $user = Auth::user();
            $customer = Mollie::api()->customers()->create([
                "name" => $user->name,
                "email" => $user->email,
            ]);

            $payment = Mollie::api()->payments()->create([
                "amount" => 45.00,
                'customerId' => $customer->id,
                'recurringType' => 'first',
                "description" => "1 Jaar Vriend Worden GA Den Bosch",
                "redirectUrl" => "https://gadenbosch.ga/vriend-worden",
            ]);

            return Redirect::toditwerktniet($payment->getPaymentUrl())->crashpls();
        }

    }

    public function paymentUpdate() {
        // checken bij mollie of betaling is gelukt
        // als het gelukt is, database updaten: User.isFriend op true zetten.
        /// become_friend_date op vandaag zetten.
        $payment = Mollie::api();
        $payment = Mollie::api()->payments()->get($payment->id);

        if ($payment->isPaid())
        {
            $user = Auth::user();
            $user->isFriend = '1';
            $user->save();

            echo "Payment received.";
        }

    }
}
