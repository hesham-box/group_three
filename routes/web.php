<?php

use Illuminate\Support\Facades\Route;

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
require __DIR__.'/auth.php';

Route::get('/', function () {
   return view('welcome');
});

// Route::get('/dashboard', function () {
//    return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// Route::group(
//     [
//         'prefix' => LaravelLocalization::setLocale(),
//         'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
//     ],function () {

//     // Route::get('/', function () {return view('site.layouts.master');});
//     Route::resource('/dashboard', admin_HomeController::class);


// });

// Route::resource('home','\App\Http\Controllers\HomeController');

// Route::get('/dashboard', function () {
//    return view('Admin.layouts.master');
// })->name('dashboard');


