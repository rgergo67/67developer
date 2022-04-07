<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Cookie;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        if (Cookie::has('locale') and in_array(Cookie::get('locale'), Config::get('app.languages'))) {
            App::setLocale(Cookie::get('locale'));
        } else {
            if (session()->has('guard') && Auth::check()) {
                auth()->setDefaultDriver(session('guard'));
                App::setLocale(Auth::user()->language);
            }
        }

        return $next($request);
    }
}
