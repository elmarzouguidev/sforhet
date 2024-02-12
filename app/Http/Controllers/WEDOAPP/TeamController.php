<?php

namespace App\Http\Controllers\WEDOAPP;

use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    public function index()
    {
        return view('pages.team.index');
    }
}
