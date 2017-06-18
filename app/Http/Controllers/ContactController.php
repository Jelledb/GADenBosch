<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public $timestamps = false;
    public function contact(){
        //load content
        $contact = Contact::find(1);
        //show content
        return view('contact', compact('contact'));
    }

    public function cmsContact(){
        $contact = Contact::find(1);
        return view('cms/cmsContact', compact('contact'));
    }

    public function update(Request $request){
        $contact = Contact::find(1);
        $contact->timestamps = false;

        //put input in variable
        $links = $request->input('text-links');
        $rechts = $request->input('text-rechts');

        //set to database
        $contact->content_right = $rechts;
        $contact->content_left = $links;

        //save in database
        $contact->save();

        return redirect('cms/contact')
            ->with('success','Pagina is bewerkt!');
    }
}
