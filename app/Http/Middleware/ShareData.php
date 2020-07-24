<?php

namespace App\Http\Middleware;
use App\Panier;
use Illuminate\Support\Facades\Auth;

use Closure;
use Illuminate\Support\Facades\View;

class ShareData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$gard='web')
    {
        View::share([
            'infosPanier' => Panier::user_cart_infos(session()->getId())
        ]);
        return $next($request);
    }
}
