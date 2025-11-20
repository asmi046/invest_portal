<?php
use Illuminate\Support\Facades\Route;
use UniSharp\LaravelFilemanager\Lfm;

// Route::prefix('laravel-filemanager')->group(function () {
//     Lfm::routes();
// });

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
     Lfm::routes();
 });
