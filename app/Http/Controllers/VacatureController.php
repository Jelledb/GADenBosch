<?php

namespace App\Http\Controllers;

use App\vacatures;
use Illuminate\Http\Request;

class VacatureController extends Controller
{
    public $timestamps = false;
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

        $vacature = vacatures::find($id);
        if($vacature){

            $vacature->title = "$request->title";
            $vacature->timestamps = false;
            if($vacature->show === 1){
                if($request->toon1 === "1"){
                    $vacature->show = 1;
                }else{
                    $vacature->show = 0;
                }

            }else{
                if($request->toon2 === "1"){
                    $vacature->show = 1;
                }else{
                    $vacature->show = 0;
                }
            }
            $vacature->short_description = "$request->short_description";
            $vacature->description = "$request->description";
            $vacature->save();
        }
        //todo
        return redirect('cms/vacature')
            ->with('success','Product is bewerkt!');

    }
    public function getcreate(){
        return view('cms/cmsCVacature');
    }
    public function create(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'short_description' => 'required'
        ]);

        $vacature = new vacatures();
        $vacature->title = "$request->title";
        $vacature->description = "$request->description";
        $vacature->short_description = "$request->short_description";
        $vacature->timestamps = false;
        $vacature->save();
        return redirect('cms/vacature')
            ->with('success','Product is bewerkt!');
    }
    public function delete($id){
        vacatures::find($id)->delete();
        return redirect('cms/vacature')
            ->with('success','Product is bewerkt!');
    }
    public function updateToon(Request $request, $id){
        $vacature = vacatures::find($id);
        if($vacature->show === 1){
            if($request->toon1 === "1"){
                $vacature->show = 1;
            }else{
                $vacature->show = 0;
            }

        }else{
            if($request->toon2 === "1"){
                $vacature->show = 1;
            }else{
                $vacature->show = 0;
            }
        }

        $vacature->timestamps = false;
        $vacature->save();
        return redirect('cms/vacature')
            ->with('success','Product is bewerkt!');
    }
}
