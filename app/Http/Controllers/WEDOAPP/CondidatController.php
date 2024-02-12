<?php

namespace App\Http\Controllers\WEDOAPP;

use App\Http\Controllers\Controller;
use App\Http\Requests\WEDOAPP\Candidat\CandidatFormRequest;
use App\Http\Requests\WEDOAPP\Entreprise\EntrepriseFormRequest;
use App\Mail\WEDOAPP\Entreprise\EntrepriseMail;
use App\Models\WEDOAPP\Candidat;
use App\Models\WEDOAPP\City;
use Illuminate\Support\Facades\Mail;
use TCG\Voyager\Models\Page;

class CondidatController extends Controller
{
    public function index()
    {

        $pageCandidat = Page::whereSlug('espace-candidats')->where('status', 'active')->first();

        return view('pages.candidats.index', compact('pageCandidat'));
    }

    public function entreprise()
    {
        $pageEntreprise = Page::whereSlug('espace-entreprise')->where('status', 'active')->first();

        return view('pages.espace-entreprise.index', compact('pageEntreprise'));
    }

    public function storeCandidat(CandidatFormRequest $request)
    {
        //$request->dd();
        $city = str($request->ville)->slug();

        $newCity = City::firstOrCreate(['slug' => $city], ['name' => $request->ville]);

        $candidat = new Candidat();
        $candidat->nom = $request->nom;
        $candidat->prenom = $request->prenom;
        $candidat->date_nissance = $request->date_nissance;
        $candidat->adresse = $request->adresse;
        $candidat->quartier = $request->quartier;
        $candidat->diplome = $request->diplome;
        $candidat->filiere = $request->filiere;
        $candidat->city()->associate($newCity);
        $candidat->save();

        return redirect(route('candidats'))->with('success', 'Votre Demande  été envoyer avec success');
    }

    public function storeEntreprise(EntrepriseFormRequest $request)
    {
        Mail::to(config('sforhet.email'))->send(new EntrepriseMail($request->validated()));

        if (empty(Mail::flushMacros())) {

            return redirect()->back()->with('success', 'Merci votre demande a été envoyer avec succès');
        } else {
            return redirect()->back()->with('error', 'Erreur !! merci de ressayer');
        }
    }
}
