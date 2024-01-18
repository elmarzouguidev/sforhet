<?php

namespace App\Http\Controllers\WEDOAPP;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReleaseController extends Controller
{
    //

    public function index()
    {
        return view('pages.release.index');
    }
}
