<?php

namespace App\Http\Controllers;

use App\images_sliders;
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
            ->take(4)
            ->orderBy('aangemaakt', 'desc')
            ->get();
        $slider_images = images_sliders::where('zichtbaar', 1)
            ->get();
        return view('index', ['newsItems' => $newsItems, 'sliderImages' => $slider_images]);
    }
}
