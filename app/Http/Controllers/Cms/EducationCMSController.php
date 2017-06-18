<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Educatie;
use Illuminate\Http\Request;

class EducationCMSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educaties = Educatie::all();
        return view('cms.educatie.index', compact('educaties'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.educatie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $educatiepagina = new Educatie();
        $educatiepagina->title = "$request->titel";
        $educatiepagina->content_left = "$request->leftcolum";
        $educatiepagina->content_right = "$request->rightcolum";
        $educatiepagina->save();

        return redirect()->route('educatie.index')
            ->with('success', 'Pagina is aangemaakt');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $educatie = Educatie::find($id);
        return view('cms/educatie/edit', compact('educatie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required'
        ]);
        Educatie::find($id)->update(array_merge($request->all()));
        return redirect()->route('educatie.index')
            ->with('success', 'De pagina is bijgewerkt.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Educatie::find($id)->delete();
        return redirect()->route('educatie.index')
            ->with('success', 'De pagina is verwijderd.');
    }
}
