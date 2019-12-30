<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if ($guard == "front_user" && Auth::guard($guard)->check()) {
            
            echo 45435;die();
            return redirect('/yes');
        }
        if (Auth::guard($guard)->check()) {
            return redirect('/behindthescreen');
        }
        return $next($request);
    }
}
