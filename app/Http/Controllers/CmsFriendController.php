<?php

namespace App\Http\Controllers;

use App\Vriend;
use Illuminate\Http\Request;

class CmsFriendController extends Controller
{
    public $timestamps = false;
    public function vriendWorden(){
        //load content
        $vriend = Vriend::find(1);
        //show content
        return view('vriend-worden', compact('vriend'));
    }

    public function cmsWordVriend(){
        $vriend = Vriend::find(1);
        return view('cms/vriend-worden', compact('vriend'));
    }

    public function update(Request $request)
    {
        $vriend = Vriend::find(1);
        $vriend->timestamps = false;

        //put input in variable
        $tekst = $request->input('text');

        //set to database
        $vriend->content = $tekst;

        //save in database
        $vriend->save();

        return redirect('cms/vriend-worden')
            ->with('success', 'Pagina is bewerkt!');
    }
}
