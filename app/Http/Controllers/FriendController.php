<?php

namespace App\Http\Controllers;



use Illuminate\Contracts\Session\Session;
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

    public function unFriend($user){
        $user->isFriend = '0';
    }

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
            $this->unFriend($user)->everyMinute();;

            //return Redirect::route('vriend-worden')->with('success', 'De betaling is gelukt! U bent nu vriend van GA Den Bosch');
            Session::flash('success', 'De betaling is gelukt! U bent nu vriend van GA Den Bosch');

            //dit berichtje gaat terug naar mollie om te laten weten dat we hier kaar zijn en dat het gelukt is.
            //het gaat erom dat het een status 200 terug stuurt (oftewel request gelukt)
            //return redirect()->route('vriend-worden')->with('success', 'Bedankt voor je betaling!');
        }else{
            Session::flash('fail', 'De betaling is misukt!');
        }
    }
}
