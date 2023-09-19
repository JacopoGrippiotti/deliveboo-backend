<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AdminController as ApiAdminController;
use App\Http\Controllers\Api\GuestController as ApiGuestController;
use App\Http\Controllers\Api\LoginController as LoginUserController;
use App\Http\Controllers\Api\RegisterController as RegisterUserController;
use App\Http\Controllers\Api\DishesController as ApiDishController;
use App\Http\Controllers\Api\OrdersController as ApiOrderController;
use App\Models\Restaurant;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::name('api.admin.')->group(function () {
    Route::get('/{user}/restaurants', [ApiAdminController::class, 'index'])->name('index.restaurants');
    // Route::get('/{user}/restaurants/create', [ApiAdminController::class, 'create'])->name('create.restaurants');
    Route::post('/{user}/restaurants', [ApiAdminController::class, 'store'])->name('store.restaurants');
    // Route::get('{user}/restaurants/deleted', [ApiAdminController::class, 'deletedIndex'])->name('trashed.restaurants');
    Route::get('/{user}/restaurants/{restaurant}', [ApiAdminController::class, 'show'])->name('show.restaurants');
    Route::get('/{user}/restaurants/{restaurant}/edit', [ApiAdminController::class, 'edit'])->name('edit.restaurants');
    Route::put('/{user}/restaurants/{restaurant}', [ApiAdminController::class, 'update'])->name('update.restaurants');
    Route::delete('/{user}/restaurants/{restaurant}', [ApiAdminController::class, 'delete'])->name('destroy.restaurants');
    Route::delete('{user}/restaurants/deleted/{restaurant}', [ApiAdminController::class, 'restore'])->name('restore.restaurant');
    Route::delete('{user}/restaurants/deleted/{restaurant}/hardDelete', [ApiAdminController::class, 'obliterate'])->name('obliterate.restaurants');

});

Route::prefix('{user}/restaurants/{restaurant}')->name('api.admin.')->group(function(){
    Route::get('/dishes', [ApiDishController::class, 'index'])->name('index.dishes');
    Route::get('/orders', [ApiOrderController::class, 'index'])->name('index.orders');
    Route::get('/create', [ApiDishController::class, 'create'])->name('create.dishes');
    Route::post('/', [ApiDishController::class, 'store'])->name('store.dishes');
    Route::get('/deleted-dishes', [ApiDishController::class, 'deletedIndex'])->name('trashed.dishes');
    Route::delete('/deleted-dishes/{dish}', [ApiDishController::class, 'restore'])->name('restore.dish');
    Route::delete('/deleted-dishes/{dish}/hardDelete', [ApiDishController::class, 'obliterate'])->name('obliterate.dishes');
    Route::get('/dishes/{dish}', [ApiDishController::class, 'show'])->name('show.dishes');
    Route::put('/dishes/{dish}', [ApiDishController::class, 'update'])->name('update.dishes');
    Route::delete('/dishes/{dish}', [ApiDishController::class, 'delete'])->name('destroy.dishes');
    Route::get('/dishes/{dish}/edit', [ApiDishController::class, 'edit'])->name('edit.dishes');
    Route::get('/orders/{order}', [ApiOrderController::class, 'show'])->name('show.orders');
    Route::delete('/orders/{order}', [ApiOrderController::class, 'destroy'])->name('trashed.orders');
});
Route::name('api.guest.')->group(function (){
    Route::get('/restaurants', [ApiGuestController::class, 'indexRestaurants'])->name('index.restaurants');
    Route::get('/restaurants/{id}', [ApiGuestController::class, 'showRestaurant'])->name('show.restaurant');
    Route::post('/cart', [ApiOrderController::class, 'store'])->name('cart');
});


Route::post('/register', [RegisterUserController::class, 'register'])->name('api.register');
Route::post('/login', [LoginUserController::class, 'login'])->name('api.login');

Route::middleware(['auth:sanctum'])->group(function(){
    Route::post('/logout', [LoginUserController::class, 'logout'])->name('api.logout');
});
