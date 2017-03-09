<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    function getIndex(){
        return view('index');
    }
    function getWerkplaats ()
    {
        return view('werkplaats');
    }
    function getContact(){
        return view('Contact');
    }
    function getNieuws(){
        return view('nieuws');
    }
    function getOverons(){
        return view('over');
    }

    public function cmshome(){
        return view('cms/cmshome');

    }
}
