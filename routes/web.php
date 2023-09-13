<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    // Route::get('/', [ AdminDashboardController::class , 'home'])->name('home');
    // Route::get('/restaurants/deleted', [Controller::class, 'deletedIndex'] )->name('restaurants.deleted');
    // Route::post('/restaurants/deleted/{post}', [Controller::class, 'restore'] )->name('restaurants.restore');
    // Route::delete('/restaurants/deleted/{post}', [Controller::class, 'obliterate'] )->name('restaurants.obliterate');
    // Route::resource('/restaurants', Controller::class);
});
