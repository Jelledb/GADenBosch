<?php

namespace App\Http\Controllers;

use App\overons;
use Illuminate\Http\Request;

class OverOnsController extends Controller
{
    public $timestamps = false;
    public function informatie(){
        //load content
        $overons = overons::find(1);
        //show content
        return view('over', compact('overons'));
    }

    public function cmsInformatie(){
        $overons = overons::find(1);
        return view('cms/cmsInformatie', compact('overons'));
    }

    public function update(Request $request){
        $overons = overons::find(1);
        $overons->timestamps = false;

        //put input in variable
        $links = $request->input('text-links');
        $rechts = $request->input('text-rechts');

        //set to database
        $overons->content_right = $rechts;
        $overons->content_left = $links;

        //save in database
        $overons->save();

        return redirect('cms/informatie')
            ->with('success','Pagina is bewerkt!');
    }
}
