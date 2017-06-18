<?php

namespace App\Http\Controllers;

use App\overons;
use App\Vacatures;
use Illuminate\Http\Request;

class VacatureController extends Controller
{
    public $timestamps = false;

    public function getVacaturePage() {
        $vacatures = Vacatures::all();
        return view('vacatures/vacatures', compact('vacatures'));
    }
    public function getDetailPage($id){
        $vacature = Vacatures::find($id);
        return view('vacatures/detailvacature', compact('vacature'));
    }
    public function getCmsVacature(){
        $vacatures = Vacatures::all();
        return view('cms/vacature/index', compact('vacatures'));
    }
    public function getCMSRUVacature($id){
        $vacature = Vacatures::find($id);
        return view('cms/vacature/edit', compact('vacature'));
    }
    public function update(Request $request, $id){
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'short_description' => 'required'
        ]);

        $vacature = overons::find($id);
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
        return redirect('cms/vacature')
            ->with('success','Vacature is bewerkt!');

    }
    public function getcreate(){
        return view('cms/vacature/create');
    }
    public function create(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'short_description' => 'required'
        ]);

        $vacature = new Vacatures();
        $vacature->title = "$request->title";
        $vacature->description = "$request->description";
        $vacature->short_description = "$request->short_description";
        $vacature->timestamps = false;
        $vacature->save();
        return redirect('cms/vacature')
            ->with('success','Vacature is aangemaakt!');
    }
    public function delete($id){
        Vacatures::find($id)->delete();
        return redirect('cms/vacature')
            ->with('success','Vacature is verwijderd!');
    }
    public function updateToon(Request $request, $id){
        $vacature = Vacatures::find($id);
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
            ->with('success','Vacature is bewerkt!');
    }
}
