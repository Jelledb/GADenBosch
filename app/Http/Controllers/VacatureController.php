<?php

namespace App\Http\Controllers;

use App\vacatures;
use Illuminate\Http\Request;

class VacatureController extends Controller
{
    // Return the SponserView with the sponsors.
    public function getVacaturePage() {
        $vacatures = vacatures::all();
        return view('vacatures/vacatures', compact('vacatures'));
    }
    public function  getDetailPage($id){
        $vacature = vacatures::find($id);
        return view('vacatures/detailvacature', compact('vacature'));
    }
    public function getCmsVacature(){
        $vacatures = vacatures::all();
        return view('cms/cmsVacature', compact('vacatures'));
    }
    public function getCMSRUVacature($id){
        $vacature = vacatures::find($id);
        return view('cms/cmsRuVacature', compact('vacature'));
    }
    public function update(Request $request, $id){
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'short_description' => 'required'
        ]);

        vacatures::find($id)->update($request->all());
        //todo
        return redirect()->url('/vacature')
            ->with('success','Product is bewerkt!');

    }
}
