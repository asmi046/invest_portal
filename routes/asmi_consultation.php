<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Consultation\ObrInvestController;
use App\Http\Controllers\Consultation\SenderConsultController;

Route::post('/send_consult', [SenderConsultController::class, "send_consultation"])->name('send_consultation');
Route::get('/thencs_consult', [SenderConsultController::class, "show_thencs"])->name('thencs_consult');

Route::post('/send_obr_invest', [ObrInvestController::class, "obr_invest_send"])->name('obr_invest_send');
Route::get('/thencs_obr_invest', [ObrInvestController::class, "show_thencs"])->name('thencs_obr_invest');

Route::get('/cache_clear', function() {
    Artisan::call('optimize:clear');
    return Redirect::back()->with('msg', 'Кеш сброшен');
})->name('cache_clear');
