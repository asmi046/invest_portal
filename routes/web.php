<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LawController;

use App\Http\Controllers\NewsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SovetController;
use App\Http\Controllers\CadastrController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\MunicipalController;
use App\Http\Controllers\Page\PageController;
use App\Http\Controllers\GlobalPageController;
use App\Http\Controllers\InvestProjectController;

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
Route::get('/test', [IndexController::class, "test"])->name('test');
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

Route::get('/law', [LawController::class, "index"])->name('law');
Route::get('/cadastr', [CadastrController::class, "index"])->name('cadastr');

Route::get('/municipal-standart', [MunicipalController::class, "index"])->name('municipal');
Route::get('/municipal-standart/{slug}', [MunicipalController::class, "page"])->name('municipal_page');

Route::get('/invest-projects', [InvestProjectController::class, "index"])->name('invest_project');
Route::get('/invest-projects/{slug}', [InvestProjectController::class, "page"])->name('invest_project_page');

Route::get('/sovets', [SovetController::class, "index"])->name('sovet');
Route::get('/sovets/{slug}', [SovetController::class, "page"])->name('sovet_page');

Route::get('/supports', [SupportController::class, "index"])->name('support');
Route::get('/supports/{slug}', [SupportController::class, "page"])->name('support_page');



Route::get('/leng/{locale}', function (string $locale) {
    if (! in_array($locale, ['en', 'ru'])) {
        abort(400);
    }
    session(['locale' => $locale]);
    return redirect()->back();
})->name('lang');
