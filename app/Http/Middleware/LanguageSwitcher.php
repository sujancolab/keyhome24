<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageSwitcher
{
    public function handle($request, Closure $next)
    {
        if ($request->has('lang')) {
            $lang = $request->get('lang');
            if (in_array($lang, ['fr', 'de', 'it'])) {
                App::setLocale($lang);
                Session::put('applocale', $lang);
            }
        } else {
            App::setLocale(Session::get('applocale', config('app.locale')));
        }

        return $next($request);
    }
}
