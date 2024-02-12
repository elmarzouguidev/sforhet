<?php

namespace App\Http\Controllers\WEDOAPP;

use App\Http\Controllers\Controller;
use App\Models\WEDOAPP\Partner;
use TCG\Voyager\Models\Page;

class CabinetController extends Controller
{
    public function index()
    {
        $pageAbout = Page::whereSlug('a-propos-de-nous')->where('status', 'active')->first();
        $pageHistoir = Page::whereSlug('notre-histoire')->where('status', 'active')->first();
        $pageFoundateur = Page::whereSlug('mot-du-fondateur')->where('status', 'active')->first();
        $pagePartner = Page::whereSlug('nos-paternaires')->where('status', 'active')->first();

        $partners = Partner::all();

        return view('pages.cabinet.index', compact('pageAbout', 'pageHistoir', 'pageFoundateur', 'pagePartner', 'partners'));
    }
}
