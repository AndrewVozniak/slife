<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    protected $supportedLocales = ['ua', 'en', 'ru'];
    protected $defaultLocale = 'ua';
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $locale = $request->segment(1); // Отримуємо перший сегмент URL як локаль

        // Якщо локаль відсутня або некоректна, перенаправляємо на локаль за замовчуванням
        if (!in_array($locale, $this->supportedLocales)) {
            return redirect($this->defaultLocale . '/' . $request->path());
        }

        // Встановлюємо локаль
        App::setLocale($locale);

        return $next($request);
    }

}
