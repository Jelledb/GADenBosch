<?php

namespace App\Http\Controllers;



use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use App\User;
use Illuminate\Console\Scheduling\Schedule;
use Mollie\Laravel\Facades\Mollie;
use Carbon\Carbon;
use Socialite;

class FriendController extends Controller
{

    public function create()
    {
        return view('wordVriend');
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
                "redirectUrl" => "http://gadenbosch.ga/vriend-worden-redirect/" . $user->id,
                "webhookUrl" => 'http://gadenbosch.ga/vriend-worden-webhook/' . $user->id,
            ]);
            return Redirect::to($payment->getPaymentUrl());
        }
        return Redirect::route('login')->with('message', 'Log eerst in of registreer als u nog geen account heeft');
    }

    public function paymentRedirect($user)
    {
        $user = User::find($user);
        dd($user);
        if ($user->isFriend == '1')
            return Redirect::route('vriend-worden')->with('success', 'De betaling is gelukt!');
        else
            return Redirect::route('vriend-worden')->with('fail', 'De betaling is mislukt!');
    }

    public function paymentUpdate($user)
    {
        // checken bij mollie of betaling is gelukt
        $payment = Mollie::api()->payments()->get(request('id'));

        if ($payment->isPaid()) {
            $user = User::find($user);
            $user->isFriend = '1';
            $user->frienddate = Carbon::now();
            $user->save();
        }
    }
}
