<?php

namespace App\Http\Controllers\WEDOAPP;

use App\Http\Controllers\Controller;
use App\Models\WEDOAPP\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{


    public function index()
    {
        return view('pages.service.index');
    }

    public function single(Service $service)
    {
        return view('pages.service.single.index',compact('service'));
    }
}
