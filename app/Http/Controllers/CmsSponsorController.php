<?php

namespace App\Http\Controllers;

use Request;
use App\sponsors;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redirect;
use Session;
use Validator;
use File;

class CmsSponsorController extends Controller
{
    public function newsponsor()
    {
        return view('cms/sponsor/create');
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function opslaan(Request $request)
    {
        $data = $request::all();

        $file = array('image' => Input::file('image'));

        $rules = array(
            'image' => 'required',
        );

        $validator = Validator::make($file, $rules);

        if($validator->fails()){
            //fails

            return Redirect::route('sponsors');
        }
        else {
            if(Input::file('image')->isValid()) {

                $destinationPath = '/images/logos/';
                $extension = Input::file('image')->getClientOriginalExtension();
                $filename = 'sponsor-'.rand(11111, 99999).'.'.$extension;
                Input::file('image')->move(public_path().$destinationPath, $filename);

                Session::flash('succes', 'Upload successfully');

                $png_url = $destinationPath.$filename;

                $sponsor = new sponsors;
                $sponsor->timestamps = false;
                $sponsor->name = $data['name'];
                $sponsor->website = $data['website'];
                $sponsor->photo = $png_url;
                $sponsor->visible = $data['visible'];

                $sponsor->save();

                return Redirect::route('sponsors');
            }
        }
    }

    public function destroy($id)
    {
        $sponsor = sponsors::find($id);

        $filelocation = $sponsor->photo;

        File::delete($filelocation);

        $sponsor->delete();
        return redirect()->route('sponsors')
            ->with('success', 'De sponsor is verwijderd.');
    }

    public function edit($id){
        $sponsor = sponsors::where('id', $id)
            ->take(1)
            ->get();

        return view('cms/sponsor/edit')->with('editSponsor', $sponsor);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function editOpslaan(Request $request, $id)
    {
        $data = $request::all();

        $file = array('image' => Input::file('image'));

        $destinationPath = 'images/logos/';
        $extension = Input::file('image')->getClientOriginalExtension();
        $filename = 'sponsor-'.rand(11111, 99999).'.'.$extension;
        Input::file('image')->move($destinationPath, $filename);

        Session::flash('succes', 'Upload successfully');

        $png_url = $destinationPath.$filename;

        $sponsor = sponsors::where('id', $id)->first();
        $sponsor->timestamps = false;
        $sponsor->name = $data['name'];
        $sponsor->website = $data['website'];
        $sponsor->photo = $png_url;
        $sponsor->visible = $data['visible'];

        $sponsor->save();

        return Redirect::route('sponsors');
    }
}
