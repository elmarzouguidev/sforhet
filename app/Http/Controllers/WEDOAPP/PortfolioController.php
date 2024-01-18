<?php

namespace App\Http\Controllers\WEDOAPP;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{



    public function index()
    {
        return view('pages.portfolio.index');
    }

    public function single()
    {
        return view('pages.portfolio.single.index');
    }
}
