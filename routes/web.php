<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

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
    return redirect('ua');
});

// Група з префіксом для інших маршрутів з локалізацією
Route::group(['prefix' => '{locale}', 'where' => ['locale' => 'ua|en|ru']], function () {
    Route::get('/change-locale/{lang}', 'App\Http\Controllers\LocaleController@changeLang')->name('changeLocale');
    Route::get('/change-currency/{currency}', 'App\Http\Controllers\CurrencyController@changeCurrency')->name('changeCurrency');
    Route::get('/', [ProductController::class, 'index'])->name('home');

    Route::get('/catalog/{category}/{subcategory?}/{last_category?}', [ProductController::class, 'catalog'])->name('catalog');
    Route::get('/product/{id}', [ProductController::class, 'product'])->name('product');


    Route::get('/login', [AuthController::class, 'signInView'])->name('login');
    Route::get('/register', [AuthController::class, 'signUpView'])->name('register');
    Route::get('/forgot-password', [AuthController::class, 'forgotPasswordView'])->name('forgotPassword');

    Route::get('/shopping-cart', [ProductController::class, 'shoppingCart'])->name('shoppingCart');

    Route::get('/cabinet/personal_data', [UserController::class, 'personalData'])->name('personalData');
    Route::get('/cabinet/order_history', [UserController::class, 'orderHistory'])->name('orderHistory');
    Route::get('/cabinet/favorite', [UserController::class, 'favorite'])->name('favorite');

    Route::fallback(function () {
        return view('errors.404');
    });
});
