<?php

namespace App\Http\Controllers;

use App\expositions;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Products;

class MenuController extends Controller
{
    function getWerkplaats ()
    {
        return view('werkplaats.werkplaats');
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

    public function cmsTentoonstellingen(){
        return view('cms/cmsnewtentoonstellingen');
    }
    public function cmsEditTentoonstelling($id){
        $exposition = expositions::where('id', $id)
            ->take(1)
            ->get();
        return view('cms/cmsedittentoonstelling')->with('editExpo', $exposition);
    }
    public function cmsWorkshop(){
        return view('cms/cmsnewworkshop');
    }
    public function cmslijstTentoonstellingen(){
        $expositions = expositions::orderBy('id', 'desc')
            ->get();
        return view('cms/cmstentoonstellingen')->with('allExpositions', $expositions);
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
    public function cmssponsors(){
        return view('cms/cmssponsors');
    }
    public function cmsNewSponsor(){
        return view('cms/cmsNewSponsor');
    }
    public function cmsInformatie(){
        return view('cms/cmsInformatie');
    }
    public function cmsMenu(){
        return view('cms/cmsHoofdmenu');
    }
    public function cmsNewMenu(){
        return view('cms/cmsNewMenu');
    }
    public function cmsNieuwsbrief(){
        return view('cms/cmsNieuwsbrief');
    }
    public function friendPage() {
        return view('wordVriend');
    }
    public function getWebShop() {
        return view('webshop');

    }
}
