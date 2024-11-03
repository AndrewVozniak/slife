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
    return redirect('ua');
});

// Група з префіксом для інших маршрутів з локалізацією
Route::group(['prefix' => '{locale}', 'where' => ['locale' => 'ua|en|ru']], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/change-locale/{lang}', 'App\Http\Controllers\LocaleController@changeLang')->name('changeLocale');
    Route::get('/change-currency/{currency}', 'App\Http\Controllers\CurrencyController@changeCurrency')->name('changeCurrency');
});
