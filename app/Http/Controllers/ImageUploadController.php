<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function uploadImage(){
        //check right format
        $allowed = array('png', 'jpg', 'gif');
        $rules = [
            'file' => 'required|image|mimes:jpeg,jpg,png,gif'
        ];
        $data = Input::all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return '{"status":"Invalid File type"}';
        }
        if (Input::hasFile('file')) {
            $extension = Input::file('file')->getClientOriginalExtension();
            if (!in_array(strtolower($extension), $allowed)) {
                return '{"status":"Invalid File type"}';
            } else {
                //set image in right directory
                $filename = uniqid() . '_attachment.' . $extension;
                if (Input::file('file')->move('images/', $filename)) {
                    echo url('images/' . $filename);
                    exit;
                }
            }
        } else {
            return '{"status":"Invalid File type"}';
        }
    }

}
