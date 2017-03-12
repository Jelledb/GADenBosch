<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function cmshome(){
        return view('cms/cmshome');
    }
    public function cmsTentoonstellingen(){
        return view('cms/cmsnewtentoonstellingen');
    }
    public function cmsWorkshop(){
        return view('cms/cmsnewworkshop');
    }
    public function cmslijstTentoonstellingen(){
        return view('cms/cmstentoonstellingen');
    }
    public function cmsworkshops(){
        return view('cms/cmsworkshops');
    }
    public function cmsnewnews(){
        return view('cms/cmsnewnews');
    }
    public function cmsnews(){
        return view('cms/cmsnews');
    }
    public function cmsEducatie(){
        return view('cms/cmseducatieWorkshops');
    }
    public function cmsNewEducatie(){
        return view('cms/cmseducatieWorkshop');
    }
    public function cmsSchool(){
        return view('cms/cmsEducatieScholen');
    }
    public function cmsShop(){
        return view('cms/cmsShop');
    }
    public function cmsnewShopItem(){
        return view('cms/cmsnewShopItem');
    }
}
