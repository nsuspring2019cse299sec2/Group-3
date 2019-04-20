<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfCompany
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
        if (\Auth::guard(null)->check() && \Auth::user()->role == 'company') { 
            return $next($request);
        }
        return redirect('login');
    }
}
