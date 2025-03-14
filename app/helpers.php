<?php
use App\Models\Translation;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

if (!function_exists('__t')) {
    function __t($key)
    {
        // echo $key;die();
        $locale = Session::get('locale');//App::getLocale();
        // echo $locale.Session::get('locale');
        return Cache::remember("translation_{$key}_{$locale}", 60, function () use ($key, $locale) {
            $translation = Translation::where('key', $key)->where('locale', $locale)->first();
            // dd($translation);
            return $translation ? $translation->value : $key;
        });
    }
}
