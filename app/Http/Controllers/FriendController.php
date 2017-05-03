<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use App\User;
use Mollie\Laravel\Facades\Mollie;
use Carbon\Carbon;
use Socialite;

class FriendController extends Controller
{

    public function create()
    {
        return view('wordVriend');
    }

//    public function unFriend(){
//        foreach($users as $user) {
//            if ($user->isFriend == 1) {
//                $user->isFriend = 0;
//            }
//        }
//    }

    public function becomeFriend()
    {
        // Mollie shit doen hier
        // payment aanmaken
        if (Auth::check()) {
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
                "redirectUrl" => "http://gadenbosch.ga/vriend-worden",
                "webhookUrl" => 'http://gadenbosch.ga/vriend-worden-webhook/' . $user->id,
            ]);
            return Redirect::to($payment->getPaymentUrl());
        }
        return Redirect::route('login')->with('message', 'Log eerst in of registreer als u nog geen account heeft');
    }

    public function paymentUpdate($user)
    {
        // checken bij mollie of betaling is gelukt
        // $mijnId = $request->input('id');
        //$payment = Mollie::api()->payments()->get(Input::get('id'));
        // $payment = Mollie::api()->payments()->get($_POST["id"]);
        //$payment_id = 'tr_WDqYK6vllg';
        $payment = Mollie::api()->payments()->get(request('id'));

        if ($payment->isPaid()) {
            $user = User::find($user);
            $user->isFriend = '1';
            $user->frienddate = Carbon::now();
            $user->save();


        }
    }
}
