<?php

namespace App\Http\Controllers\WEDOAPP;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{


    public function index()
    {
        return view('pages.service.index');
    }

    public function single()
    {
        return view('pages.service.single.index');
    }
}
