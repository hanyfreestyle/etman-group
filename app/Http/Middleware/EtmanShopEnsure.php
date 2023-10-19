<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EtmanShopEnsure
{

    public function handle(Request $request, Closure $next): Response
    {

        if(Auth::check() == false ){
            return redirect()->route('Page_HomePage');
        }

        return $next($request);
    }
}
