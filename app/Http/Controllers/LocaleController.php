<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller
{
    /**
     * @param $locale
     * @return RedirectResponse
     */
    public function changeLang($lang)
    {
        $supportedLocales = ['ua', 'en', 'ru'];

        if (in_array($lang, $supportedLocales)) {
            Session::put('locale', $lang);
            App::setLocale($lang);
        }

        $previousUrl = url()->previous();
        $urlWithoutLocale = preg_replace('/\/(ua|en|ru)(\/|$)/', "/$lang/", $previousUrl);

        return redirect($urlWithoutLocale);
    }
}
