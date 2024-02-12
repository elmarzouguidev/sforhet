<?php

namespace App\Http\Controllers\WEDOAPP;

use App\Http\Controllers\Controller;

class FeatureController extends Controller
{
    public function index()
    {
        return view('pages.feature.index');
    }
}
