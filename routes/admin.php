
<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers;





Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],function () {
    Route::resource('navbar_data',Controllers\NavbarDetailsController::class);
    Route::resource('/dashboard', Controllers\Admin\AdminsController::class);
    Route::resource('/users', Controllers\Admin\UsersController::class);
    Route::resource('/services',Controllers\Admin\ServiceController::class);
    Route::resource('/feedbacks',Controllers\Admin\FeedbackController::class);
});

require __DIR__ . '/auth.php';



