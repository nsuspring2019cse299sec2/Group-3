<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfJobseeker
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
        if (\Auth::guard(null)->check() && \Auth::user()->role == 'jobseeker') { 
            return $next($request);
        }
        return redirect('login');
    }
}
