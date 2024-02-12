<?php

namespace App\Http\Controllers\WEDOAPP;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    //
    public function index()
    {
        return view('pages.about.index');
    }
}
