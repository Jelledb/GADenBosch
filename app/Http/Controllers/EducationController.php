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
        $page = Educatie::all();
        if($page != null){
            $currentpage = $page[0];
        }

        return view('educatie')->with('page', $currentpage);
    }
}
