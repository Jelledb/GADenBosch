<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sponsors;

class CmsSponsorController extends Controller
{
    public function newsponsor()
    {
        return view('cms/cmsNewSponsor');
    }

    public function destroy($id)
    {
        sponsors::find($id)->delete();
        return redirect()->route('sponsors')
            ->with('success', 'De sponsor is verwijderd.');
    }
}
