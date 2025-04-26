<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CountryCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // echo "country check";
        // http://127.0.0.1:8000/user-form?country=india&age=18
        if($request->country!="india"){
            die('you can not accessthis website outside to india');
        }
        return $next($request);
    }
}

