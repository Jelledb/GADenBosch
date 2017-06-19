<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Product;
use App\ProductUsersInfo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    //
    function index() {
        $orderUsers = DB::table('product_users')
            ->select('users_id')
            ->where('isorder', 1)
            ->groupBy('users_id')
            ->get();

        $orders = [];
        foreach ($orderUsers as $orderUser) {
            $infoId = DB::table('product_users')
                ->select('info_id')
                ->where('isorder', 1)
                ->where('users_id', $orderUser->users_id)
                ->first();
            dd($orderUsers);
            $info = ProductUsersInfo::where('id', $infoId->info_id)->first();

            $userProductIds = DB::table('product_users')
                ->select('product_id')
                ->where('users_id', $orderUser->users_id)
                ->get()
                ->pluck('product_id')
                ->toArray();
            $userProducts = Product::whereIn('id', $userProductIds)->get()->toArray();
            array_push($orders, array_merge((array) $info->toArray(), ['products' => $userProducts]));
        }
        return view('cms.orders.index', compact('orders'));
    }
}
