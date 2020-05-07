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
        if (Auth::guard($guard)->check() && $request->user()->admin == 0) {
            return redirect('/choose_application_type');
        }else if(Auth::guard($guard)->check() && $request->user()->admin == 1){
            return redirect('/application_type');
        }else if(Auth::guard($guard)->check() && $request->user()->admin == 3){
            return redirect('/give_privilege');
        }

        return $next($request);
    }
}
