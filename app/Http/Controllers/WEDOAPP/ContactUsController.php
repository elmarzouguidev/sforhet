<?php

namespace App\Http\Controllers\WEDOAPP;

use App\Http\Controllers\Controller;
use App\Http\Requests\WEDOAPP\Contact\ContactUsFormRequest;
use App\Mail\WEDOAPP\Contact\ContactUsEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    //

    public function index()
    {
        return view('pages.contact.index');
    }

    public function send(ContactUsFormRequest $request)
    {

        $data = $request->validated();

        Mail::to('abdelgha4or@gmail.com')->send(new ContactUsEmail($data));
        //Mail::to('abdelgha4or@gmail.com')->queue(new ContactUsEmail($data));
        //Mail::to('abdelgha4or@gmail.com')->later(now()->addMinutes(2), new ContactUsEmail($data));

        return  redirect(route('contact.us'))->with('success', 'Votre E-mail a été envoyer avec success');
    }
}
