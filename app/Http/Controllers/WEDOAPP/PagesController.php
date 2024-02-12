<?php

namespace App\Http\Controllers\WEDOAPP;

use App\Http\Controllers\Controller;
use TCG\Voyager\Models\Page;

class PagesController extends Controller
{
    public function page($page)
    {
        $page = Page::whereSlug($page)->where('status', 'active')->first();

        return view('pages.page.index', compact('page'));
    }
}
