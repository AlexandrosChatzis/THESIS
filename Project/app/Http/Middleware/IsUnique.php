<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class IsUnique
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
        if (Auth::user() &&  Auth::user()->admin == 3) {
            return $next($request);
           
        }
            return redirect()->route('login');
        
    }
}
