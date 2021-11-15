<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers;


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],function () {
        Route::get('/', function () {
            return view('auth.login');
         });
    Route::resource('/front', Controllers\Frontend\FrontendController::class);


});


require __DIR__.'/auth.php';
