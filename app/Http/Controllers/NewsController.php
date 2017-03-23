<?php

namespace App\Http\Controllers;

use App\NewsItem;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    /**
     * Create a view for a list of a news items.
     *
     * @return view
     */
    function getNewsList() {
        $newsItems = NewsItem::where('zichtbaar', 1)
            ->orderBy('aangemaakt', 'desc')
            ->get();
        return view('nieuws', ['newsItems', $newsItems]);
    }

    /**
     * Create a view for a single news item.
     *
     * @param $id
     * @return view
     */
    function getNewsItem($id) {
        $newsItems = NewsItem::where('id', $id)
            ->where('zichtbaar', 1)
            ->take(1)
            ->get();
        return view('nieuwsitem', ['newsItem' => $newsItems[0]]);
    }
}
