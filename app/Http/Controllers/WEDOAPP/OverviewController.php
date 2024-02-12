<?php

namespace App\Http\Controllers\WEDOAPP;

use App\Http\Controllers\Controller;

class OverviewController extends Controller
{
    public function index()
    {
        return view('pages.overview.index');
    }
}
