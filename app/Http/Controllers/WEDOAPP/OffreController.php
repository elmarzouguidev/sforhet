<?php

namespace App\Http\Controllers\WEDOAPP;

use App\Http\Controllers\Controller;
use App\Models\WEDOAPP\Offre;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class OffreController extends Controller
{
    //

    public function index()
    {
        $offres = Offre::all();

        $pageOffre = Page::whereSlug('nos-offres')
            ->where('status', 'active')
            ->first();

        return view('pages.offres.index', compact('offres', 'pageOffre'));
    }

    public function single(Offre $offre)
    {
        return view('pages.offres.single.index', compact('offre'));
    }
}
