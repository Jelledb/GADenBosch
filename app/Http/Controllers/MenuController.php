<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Products;

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
        return view('contact');
    }
    function getNieuws(){
        return view('nieuws');
    }
    function getOverons(){
        return view('over');
    }
    public function cmshome()
    {
        return view('cms/cmshome');
    }
    public function friendPage() {
        return view('wordVriend');
    }
    public function getWebShop() {
        return view('webshop');
    }
}
