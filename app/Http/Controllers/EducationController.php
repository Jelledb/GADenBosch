<?php

namespace App\Http\Controllers;

use App\Educatie;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    //
    public function index($id){
        $page = Educatie::find($id);
        return view('educatie')->with('page', $page);
    }
    public function education(){
        $pageproces = Educatie::take(1)->get();
        if($pageproces->isNotEmpty()){

            $page = Educatie::find($pageproces[0]->id);
        }
        else{
            $page = null;
        }
        return view('educatie')->with('page', $page);
    }
}
