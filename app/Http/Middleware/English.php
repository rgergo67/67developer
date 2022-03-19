<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class English
{
    public function handle(Request $request, Closure $next)
    {
        App::setLocale('en');

        return $next($request);
    }
}
