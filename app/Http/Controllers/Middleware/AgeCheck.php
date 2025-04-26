<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
                                    //    global middleware
                                    // http://127.0.0.1:8000/user-form?country=india&age=18
        echo "<pre>";
        print_r($request->age);
        if($request->age<18){
            die('you can not visit this site');
        }
        return $next($request);
    }
}

