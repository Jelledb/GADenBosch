<?php

namespace App\Http\Controllers;

use App\NewsItem;
use Illuminate\Http\Request;

class NewsItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = NewsItem::all();
        return view('cms.news.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'titel' => 'required',
            'beschrijving' => 'required',
            'tekst' => 'required',
            'zichtbaar' => 'required',
        ]);

        NewsItem::create(array_merge($request->all(), ['aangemaakt' => date('Y-m-d')]));
        return redirect()->route('news.index')
            ->with('success', 'Nieuwsbericht is aangemaakt');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NewsItem  $newsItem
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = NewsItem::find($id);
        return view('cms.news.edit', ['item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewsItem  $newsItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'titel' => 'required',
            'beschrijving' => 'required',
            'tekst' => 'required',
            'zichtbaar' => 'required',
        ]);

        NewsItem::find($id)->update($request->all());
        return redirect()->route('news.index')
            ->with('success', 'Het nieuwsbericht is bijgewerkt.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NewsItem  $newsItem
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        NewsItem::find($id)->delete();
        return redirect()->route('news.index')
            ->with('success', 'Het nieuwsbericht is verwijderd.');
    }
}
