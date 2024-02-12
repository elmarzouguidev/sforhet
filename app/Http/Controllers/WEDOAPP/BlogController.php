<?php

namespace App\Http\Controllers\WEDOAPP;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        return view('pages.blog.index');
    }

    public function single()
    {
        return view('pages.blog.single.index');
    }
}
