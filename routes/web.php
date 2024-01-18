<?php

use App\Http\Controllers\WEDOAPP\BlogController;
use App\Http\Controllers\WEDOAPP\CareerController;
use App\Http\Controllers\WEDOAPP\CompanyController;
use App\Http\Controllers\WEDOAPP\ContactUsController;
use App\Http\Controllers\WEDOAPP\EventController;
use App\Http\Controllers\WEDOAPP\FaqController;
use App\Http\Controllers\WEDOAPP\FeatureController;
use App\Http\Controllers\WEDOAPP\HomeController;
use App\Http\Controllers\WEDOAPP\OverviewController;
use App\Http\Controllers\WEDOAPP\PartnerController;
use App\Http\Controllers\WEDOAPP\PortfolioController;
use App\Http\Controllers\WEDOAPP\PricingController;
use App\Http\Controllers\WEDOAPP\ReleaseController;
use App\Http\Controllers\WEDOAPP\ServiceController;
use App\Http\Controllers\WEDOAPP\SolutionController;
use App\Http\Controllers\WEDOAPP\TeamController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Architecture\Services\ServiceContainer;

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
Route::group(['middleware' => 'web', 'compress_html'], function () {
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

    /*** */

    Route::get('/overview', [OverviewController::class, 'index'])->name('overview');
    Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');
    Route::get('/feature', [FeatureController::class, 'index'])->name('feature');
    Route::get('/release', [ReleaseController::class, 'index'])->name('release');
    Route::get('/solution', [SolutionController::class, 'index'])->name('solution');

    Route::get('/services', [ServiceController::class, 'index'])->name('services');
    Route::get('/services/{service}', [ServiceController::class, 'single'])->name('services.single');

    Route::get('/faqs', [FaqController::class, 'index'])->name('faqs');

    Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolios');
    Route::get('/portfolio/{prpject}', [PortfolioController::class, 'single'])->name('portfolios.single');
});


Route::group(['prefix' => 'theadmin'], function () {
    Voyager::routes();
});
