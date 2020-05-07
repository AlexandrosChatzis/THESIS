<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class IsUser
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
        if (Auth::user() &&  Auth::user()->admin == 0) {
            return $next($request);
           
        }
        return redirect('/application_type')->with('user_error', 'Είστε συνδεδεμένος ως Γραμματεία!');
   
    }
}
