<?php

use App\Http\Controllers\WEDOAPP\BlogController;
use App\Http\Controllers\WEDOAPP\CabinetController;
use App\Http\Controllers\WEDOAPP\CareerController;
use App\Http\Controllers\WEDOAPP\CompanyController;
use App\Http\Controllers\WEDOAPP\CondidatController;
use App\Http\Controllers\WEDOAPP\ContactUsController;
use App\Http\Controllers\WEDOAPP\EventController;
use App\Http\Controllers\WEDOAPP\FaqController;
use App\Http\Controllers\WEDOAPP\HomeController;
use App\Http\Controllers\WEDOAPP\OffreController;
use App\Http\Controllers\WEDOAPP\PagesController;
use App\Http\Controllers\WEDOAPP\PartnerController;
use App\Http\Controllers\WEDOAPP\ServiceController;
use App\Http\Controllers\WEDOAPP\TeamController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => ['web', 'compress_html']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact.us');

    Route::post('/contact-us', [ContactUsController::class, 'send'])->middleware('check_spam')->name('contact.us.post');

    Route::group(['prefix' => 'company'], function () {
        Route::get('/', [CompanyController::class, 'index'])->name('company');
        Route::get('/about', [CompanyController::class, 'index'])->name('company.about');
        Route::get('/partner', [PartnerController::class, 'index'])->name('company.partner');
        Route::get('/career', [CareerController::class, 'index'])->name('company.career');
        Route::get('/events', [EventController::class, 'index'])->name('company.event');
        Route::get('/events/{event?}', [EventController::class, 'single'])->name('company.event.single');

        Route::get('/teams', [TeamController::class, 'index'])->name('company.teams');
    });

    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/blog/{post}', [BlogController::class, 'single'])->name('blog.single');

    Route::get('/services', [ServiceController::class, 'index'])->name('services');
    Route::get('/services/{service:slug}', [ServiceController::class, 'single'])->name('services.single');

    Route::get('/nos-offres', [OffreController::class, 'index'])->name('offres');

    Route::get('/nos-offres/{offre:slug}', [OffreController::class, 'single'])->name('offres.single');
    Route::post('/nos-offres/{offre:slug}', [OffreController::class, 'apply'])->middleware('check_spam')->name('offres.single.post');

    Route::get('/cabinet', [CabinetController::class, 'index'])->name('cabinet');

    Route::get('/espace-candidats', [CondidatController::class, 'index'])->name('candidats');
    Route::post('/espace-candidats', [CondidatController::class, 'storeCandidat'])->middleware('check_spam')->name('candidats.store');

    Route::get('/espace-entreprise', [CondidatController::class, 'entreprise'])->name('entreprise');
    Route::post('/espace-entreprise', [CondidatController::class, 'storeEntreprise'])->middleware('check_spam')->name('entreprise.store');

    Route::get('/faqs', [FaqController::class, 'index'])->name('faqs');

    Route::get('/page/{page}', [PagesController::class, 'page'])->name('pages.single');
});

Route::group(['prefix' => 'theadmin'], function () {
    Voyager::routes();
});
