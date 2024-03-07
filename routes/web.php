<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;

use App\Http\Controllers\Page\PageController;

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

Route::get('/', [IndexController::class, "index"])->name('home');

Route::get('/news-page', [IndexController::class, "news_page"])->name('news_page');

Route::get('/news-list', [IndexController::class, "news_list"])->name('news_list');

Route::get('/socio-economic-development', [IndexController::class, "socioEconomicDevelopment"])->name('socioEconomicDevelopment');

Route::get('/about-gchp', [IndexController::class, "about_gchp"])->name('about_gchp');

Route::get('/presentation-of-the-region', [IndexController::class, "presentationRegion"])->name('presentationRegion');

Route::get('/industrial-sites', [IndexController::class, "industrial_sites"])->name('industrial_sites');

//------------------------------

Route::get('/page/{slug}', [PageController::class, "index"])->name('page');
