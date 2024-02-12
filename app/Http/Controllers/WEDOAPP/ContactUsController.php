<?php

namespace App\Http\Controllers\WEDOAPP;

use App\Http\Controllers\Controller;
use App\Http\Requests\WEDOAPP\Contact\ContactUsFormRequest;
use App\Mail\WEDOAPP\Contact\ContactUsEmail;
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

        //Mail::to(config('sforhet.email'))->send(new ContactUsEmail($data));
        Mail::to('abdelgha4or@gmail.com')->send(new ContactUsEmail($request->validated()));
        //Mail::to('abdelgha4or@gmail.com')->queue(new ContactUsEmail($data));
        //Mail::to('abdelgha4or@gmail.com')->later(now()->addMinutes(2), new ContactUsEmail($data));
        if (empty(Mail::flushMacros())) {

            return redirect()->back()->with('success', 'Votre E-mail a été envoyer avec success');
        } else {
            return redirect()->back()->with('error', 'Erreur !! merci de ressayer');
        }
    }
}
