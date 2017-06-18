<?php

namespace App\Http\Controllers;

use App\RouteMetaTag;
use Illuminate\Http\Request;

class TitleDescriptionController extends Controller
{

    /**
     * Show a view with the list of Route Meta Tags.
     */
    public function index() {
        $items = RouteMetaTag::all();
        return view('cms.title-description.index', compact('items'));
    }

    /**
     * Show a view where the user can edit the given Route Meta Tag.
     */
    public function edit($id)
    {
        $item = RouteMetaTag::find($id);
        return view('cms.title-description.edit', ['item' => $item]);
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        RouteMetaTag::find($id)->update($request->all());

        return redirect()->route('titel-beschrijving.index')
            ->with('success', 'De titel en beschrijving zijn bijgewerkt.');
    }
}
