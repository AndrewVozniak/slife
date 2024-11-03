<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function changeCurrency(string $locale, string $currency): \Illuminate\Http\RedirectResponse
    {
        session()->put('currency', $currency);

        return redirect()->back();
    }
}
