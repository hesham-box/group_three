<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

require __DIR__ . '/auth.php';

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],function () {

    // Route::get('/', function () {return view('site.layouts.master');});
    Route::resource('/dashboard', Controllers\admin_HomeController::class);
<<<<<<< HEAD
    Route::resource('navbar_data',Controllers\NavbarDetailsController::class);
=======
    Route::resource('/users', Controllers\Admin\UsersController::class);
>>>>>>> b62a21b16aaf5d8f65fdac3be44aa0bfab69fac0


});







