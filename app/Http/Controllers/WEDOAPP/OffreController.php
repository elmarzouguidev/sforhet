<?php

namespace App\Http\Controllers\WEDOAPP;

use App\Http\Controllers\Controller;
use App\Http\Requests\WEDOAPP\Candidat\CandidatFormRequest;
use App\Mail\WEDOAPP\Candidat\CandidatOffreMail;
use App\Models\WEDOAPP\Offre;
use Illuminate\Support\Facades\Mail;
use TCG\Voyager\Models\Page;

class OffreController extends Controller
{
    //

    public function index()
    {
        $offres = Offre::all();

        $pageOffre = Page::whereSlug('nos-offres')
            ->where('status', 'active')
            ->first();

        return view('pages.offres.index', compact('offres', 'pageOffre'));
    }

    public function single(Offre $offre)
    {
        return view('pages.offres.single.index', compact('offre'));
    }

    public function apply(CandidatFormRequest $request)
    {
        // $request->dd();
        $offre = Offre::whereUuid($request->offre)->first();

        Mail::to(config('sforhet.email_candidat'))->send(new CandidatOffreMail(array_merge($request->validated(), ['offre' => $offre?->toArray()])));

        if (empty(Mail::flushMacros())) {

            return redirect()->back()->with('success', 'Merci votre demande a été envoyer avec succès');
        } else {
            return redirect()->back()->with('error', 'Erreur !! merci de ressayer');
        }
    }
}
