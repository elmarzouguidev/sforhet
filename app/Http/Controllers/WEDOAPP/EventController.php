<?php

namespace App\Http\Controllers\WEDOAPP;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //

    public function index()
    {
        return view('pages.event.index');
    }

    public function single()
    {
        return view('pages.event.single.index');
    }
}
