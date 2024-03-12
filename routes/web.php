<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NewsController;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\Page\PageController;
use App\Http\Controllers\GlobalPageController;

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


Route::get('/socio-economic-development', [IndexController::class, "socioEconomicDevelopment"])->name('socioEconomicDevelopment');

Route::get('/about-gchp', [IndexController::class, "about_gchp"])->name('about_gchp');

Route::get('/presentation-of-the-region', [IndexController::class, "presentationRegion"])->name('presentationRegion');

Route::get('/industrial-sites', [IndexController::class, "industrial_sites"])->name('industrial_sites');

Route::get('/exemple', [IndexController::class, "exemple"])->name('exemple');
//------------------------------

Route::get('/page/{slug}', [PageController::class, "index"])->name('page');

//------------Новости------------

Route::get('/news/{slug}', [NewsController::class, "page"])->name('news_page');
Route::get('/news', [NewsController::class, "index"])->name('news_list');

// --------------Обединяющие-разделы--------------

Route::get('/analitics', [GlobalPageController::class, "analitics"])->name('global_analitics');
Route::get('/investor_way', [GlobalPageController::class, "investor_way"])->name('global_investor_way');
Route::get('/invest_areas', [GlobalPageController::class, "invest_areas"])->name('global_invest_areas');
Route::get('/invest_support', [GlobalPageController::class, "invest_support"])->name('global_invest_support');
Route::get('/asi', [GlobalPageController::class, "asi"])->name('global_asi');

