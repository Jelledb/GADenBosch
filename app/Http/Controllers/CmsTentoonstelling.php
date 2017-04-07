<?php

namespace App\Http\Controllers;

use App\expositions;
use Illuminate\Support\Facades\Redirect;
use Request;
use Illuminate\Support\Facades\Validator;

class CmsTentoonstelling extends Controller
{
    public function editTentoonstelling(Request $request, $id){
        $input = $request::all();
        $exposition = expositions::where('id', $id)->first();

        $validator = Validator::make($input, [
            'title' => 'required|max:255',
            'subtitle' => 'max:255',
            'introduction' => 'max:3000',
            'text' => 'required',
            'date_from' => 'required',
            'date_to' => 'required',
            'location' => 'required',
            'extra' => 'max:255',
            'opening' => 'required',
            'opening_time' => 'required',
            'message' => 'max:255'
        ]);

        if(!$validator->fails() && $exposition != null){
            $exposition->title = $input['title'];
            if(!empty($input['subtitle'])) {
                $exposition->subtitle = $input['subtitle'];
            }
            else {
                $exposition->subtitle = "";
            }
            if(!empty($input['introduction'])) {
                $exposition->introduction = $input['introduction'];
            }
            else{
                $exposition->introduction = "";
            }
            $exposition->text = $input['text'];
            $exposition->date_from = $input['date_from'];
            $exposition->date_to = $input['date_to'];
            $exposition->location = $input['location'];
            $exposition->toon = $input['toon'];
            $exposition->open_times = $input['open_times'];
            if(!empty($input['extra'])) {
                $exposition->extra = $input['extra'];
            }
            else {
                $exposition->extra = "";
            }
            $exposition->opening = $input['opening'];
            $exposition->opening_time = $input['opening_time'];
            if(!empty($input['message'])){
                $exposition->message = $input['message'];
            }
            else {
                $exposition->message = "";
            }
            $exposition->template = $input['optradio'];

            $exposition->save(['timestamps' => false]);
            return Redirect::route('bewerktentoonstelling', $id)->with('$editExpo', $exposition);
        }

        return Redirect::route('bewerktentoonstelling', $id)->with('$editExpo', $exposition);
    }
}
