<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminRoleMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && auth()->user()->role == 0) {
            return $next($request);
        }

        return redirect()->route('home')->with('error', 'Anda tidak memiliki akses untuk menu tersebut');
    }
}