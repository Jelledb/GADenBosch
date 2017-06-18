<?php

namespace App\Http\Controllers;

use App\Friend;
use Illuminate\Http\Request;

class CmsFriendController extends Controller
{
    public $timestamps = false;
    public function vriendWorden(){
        //load content
        $vriend = Friend::find(1);
        //show content
        return view('wordVriend', compact('vriend'));
    }

    public function cmsWordVriend(){
        $vriend = Friend::find(1);
        return view('cms/cmsFriend', compact('vriend'));
    }

    public function update(Request $request)
    {
        $vriend = Friend::find(1);
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
