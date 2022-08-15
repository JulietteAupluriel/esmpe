<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
      
        $locale = Str::contains(request()->fullUrl(), 'nl') ? 'nl' : 'fr';
        
        app()->setLocale($locale);

        return $next($request);
    }
}
