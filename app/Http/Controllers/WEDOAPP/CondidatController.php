<?php

namespace App\Http\Controllers\WEDOAPP;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class CondidatController extends Controller
{


    public function index()
    {
        $pageCandidat = Page::whereSlug('espace-candidats')->where('status', 'active')->first();
        return view('pages.candidats.index', compact('pageCandidat'));
    }

    public function entreprise()
    {
        $pageEntreprise = Page::whereSlug('espace-entreprise')->where('status', 'active')->first();
        return view('pages.espace-entreprise.index', compact('pageEntreprise'));
    }
}
