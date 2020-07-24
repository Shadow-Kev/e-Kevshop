<?php

namespace App\Http\Middleware;

use Closure;

class webauth
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
        if(!Auth::guard($gard)->check()){
            return redirect(route('webLogin'));
         }
        return $next($request);
    }
}
