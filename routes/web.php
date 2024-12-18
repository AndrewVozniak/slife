<?php

use App\Http\Controllers\BlogController;
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
    Route::get('/compare', [ProductController::class, 'compare'])->name('compareProduct');


    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/blog/{slug}', [BlogController::class, 'post'])->name('post');


    Route::get('/login', [AuthController::class, 'signInView'])->name('login');
    Route::get('/register', [AuthController::class, 'signUpView'])->name('register');
    Route::get('/forgot-password', [AuthController::class, 'forgotPasswordView'])->name('forgotPassword');

    Route::get('/shopping-cart', [ProductController::class, 'shoppingCart'])->name('shoppingCart');

    Route::get('/cabinet/personal_data', [UserController::class, 'personalData'])->name('personalData');
    Route::get('/cabinet/my_bonuses', [UserController::class, 'myBonuses'])->name('myBonuses');
    Route::get('/cabinet/order_history', [UserController::class, 'orderHistory'])->name('orderHistory');
    Route::get('/cabinet/favorite', [UserController::class, 'favorite'])->name('favorite');

    Route::get('/contacts', function () {
        return view('contacts');
    })->name('contacts');

    Route::get('/info/delivery', function () {
        return view('info.delivery');
    })->name('delivery');

    Route::get('/info/private_policy', function () {
        return view('info.private_policy');
    })->name('private_policy');

    Route::get('/info/return_policy', function () {
        return view('info.return_policy');
    })->name('return_policy');

    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::fallback(function () {
        return view('errors.404');
    });
});
