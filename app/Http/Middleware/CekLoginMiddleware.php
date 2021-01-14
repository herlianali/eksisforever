<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CekLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // dd(session()->has('login'));
        if (session()->has('login') === false) {
            return back()->with('pesan', "anda harus login dulu");
        }
        
        return $next($request);
    }
}
