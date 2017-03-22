<?php

namespace App\Http\Controllers;

use App\NewsItem;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the index page including the three latest news items.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsItems = NewsItem::where('zichtbaar', 1)
            ->take(3)
            ->get();
        return view('index', ['newsItems' => $newsItems, '' => '']);
    }
}
