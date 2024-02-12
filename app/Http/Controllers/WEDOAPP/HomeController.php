<?php

namespace App\Http\Controllers\WEDOAPP;

use App\Http\Controllers\Controller;
use App\Models\WEDOAPP\Metier;
use App\Models\WEDOAPP\Offre;
use App\Models\WEDOAPP\Service;
use TCG\Voyager\Models\Page;

class HomeController extends Controller
{
    public function index()
    {
        $metiers = Metier::all();
        $services = Service::all();
        $offres = Offre::all();

        $pageMetier = Page::whereSlug('nos-metiers')->where('status', 'active')->first();
        $pageService = Page::whereSlug('nos-services')->where('status', 'active')->first();
        $pageAbout = Page::whereSlug('a-propos-de-nous')->where('status', 'active')->first();

        return view('pages.home.index', compact('metiers', 'services', 'offres', 'pageMetier', 'pageService', 'pageAbout'));
    }
}
