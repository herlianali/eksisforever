<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class CekLevelMiddleware
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
        $data = User::where('username', $request->username)->first();

        if ($data->level === 'admin') {
            return redirect('/admin/dashboard');
        }elseif ($data->level === 'user') {
            return redirect('/user/dashboard');
        }
        return $next($request);
    }
}
