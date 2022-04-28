<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class LocationLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $languages = explode(',', $request->server('HTTP_ACCEPT_LANGUAGE'));

        if($languages != null) {
            App::setLocale($languages[0]);
        }else{
            App::setLocale('en');
        }

        return $next($request);
    }
}
