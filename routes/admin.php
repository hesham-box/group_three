
<?php

use App\Http\Controllers\TrackingstepsController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers;
<<<<<<< HEAD


/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




require __DIR__ . '/auth.php';
=======
use App\Http\Controllers\Auth\AdminAuthController;
>>>>>>> 93d8305060db2b276dbf6b12d8cdc9177c9f8538

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],function () {

        Route::get('adminlogin', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
        Route::resource('/dashboard', Controllers\Admin\AdminsController::class);

<<<<<<< HEAD
    Route::resource('/dashboard', Controllers\admin_HomeController::class);
    //Route::resource('tracking_steps',[Tracking_stpeController::class]);
    Route::resource('/tracking_steps',TrackingstepsController::class);



    Route::resource('navbar_data',Controllers\NavbarDetailsController::class);
    Route::resource('/dashboard', Controllers\Admin\AdminsController::class);
    Route::resource('/users', Controllers\Admin\UsersController::class);
    Route::resource('/services',Controllers\Admin\ServiceController::class);
    Route::resource('/events',Controllers\Admin\EventController::class);
    Route::resource('/agreements',Controllers\Admin\AgreementController::class);
    Route::resource('/feedbacks',Controllers\Admin\FeedbackController::class);
=======
        Route::resource('navbar_data',Controllers\NavbarDetailsController::class);
        Route::resource('/users', Controllers\Admin\UsersController::class);
        Route::resource('/services',Controllers\Admin\ServiceController::class);
        Route::resource('/feedbacks',Controllers\Admin\FeedbackController::class);
        Route::resource('/tracking_steps',TrackingstepsController::class);
>>>>>>> 93d8305060db2b276dbf6b12d8cdc9177c9f8538
});

require __DIR__ . '/auth.php';



