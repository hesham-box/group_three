
<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "Admin" middleware group. Now create something great!
|
*/

require __DIR__ . '/auth.php';

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],function () {

    // Route::get('/', function () {return view('site.layouts.master');});
    Route::resource('/dashboard', Controllers\admin_HomeController::class);
    Route::resource('navbar_data',Controllers\NavbarDetailsController::class);
    Route::resource('/users', Controllers\Admin\UsersController::class);
});





