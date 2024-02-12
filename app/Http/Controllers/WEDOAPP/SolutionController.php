<?php

namespace App\Http\Controllers\WEDOAPP;

use App\Http\Controllers\Controller;

class SolutionController extends Controller
{
    public function index()
    {
        return view('pages.solution.index');
    }
}
