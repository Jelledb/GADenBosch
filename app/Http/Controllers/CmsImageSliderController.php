<?php

namespace App\Http\Controllers;

use App\images_sliders;
use Request;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redirect;
use Session;
use Validator;
use File;

class CmsImageSliderController extends Controller
{
    public function newImage(){
        return view('cms/image-slider/create');
    }
    public function newImageOpslaan(Request $request)
    {
        $data = $request::all();

        $file = array('image' => Input::file('image'));

        $rules = array(
            'image' => 'required',
        );

        $validator = Validator::make($file, $rules);

        if($validator->fails()){
            return Redirect::route('fotos-slider');
        }
        else {
            if(Input::file('image')->isValid()) {

                $destinationPath = '/images/slider-images/';
                $extension = Input::file('image')->getClientOriginalExtension();
                $filename = 'image-slider-'.rand(11111, 99999).'.'.$extension;
                Input::file('image')->move(public_path().$destinationPath, $filename);

                Session::flash('succes', 'Upload successfully');

                $png_url = $destinationPath.$filename;

                $image_slider = new images_sliders;
                $image_slider->timestamps = false;
                $image_slider->foto = $png_url;
                $image_slider->zichtbaar = $data['visible'];
                $image_slider->aangemaakt = date('Y-m-d');

                $image_slider->save();

                return Redirect::route('fotos-slider');
            }
        }
    }

    public function destroy($id)
    {
        $image_slider = images_sliders::find($id);

        $filelocation = $image_slider->photo;

        File::delete($filelocation);

        $image_slider->delete();
        return redirect()->route('fotos-slider')
            ->with('success', 'De foto is verwijderd.');
    }

    public function editImage($id){
        $image_slider = images_sliders::where('id', $id)
            ->take(1)
            ->get();

        return view('cms/image-slider/edit')->with('editImageSlider', $image_slider);
    }

    public function editOpslaan(Request $request, $id)
    {
        $data = $request::all();

        $file = array('image' => Input::file('image'));

        $destinationPath = 'images/slider-images/';
        $extension = Input::file('image')->getClientOriginalExtension();
        $filename = 'image-slider-'.rand(11111, 99999).'.'.$extension;
        Input::file('image')->move($destinationPath, $filename);

        Session::flash('succes', 'Upload successfully');

        $png_url = $destinationPath.$filename;

        $image_slider = images_sliders::where('id', $id)->first();
        $image_slider->timestamps = false;
        $image_slider->foto = $png_url;
        $image_slider->zichtbaar = $data['visible'];

        $image_slider->save();

        return Redirect::route('fotos-slider');
    }
}
