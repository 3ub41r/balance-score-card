<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Tukar user sekarang ke bukan admin
        // Visit page tu. Patut dia logout user tu
        // Oh sorry kena register middleware tu dulu
        // Kalau user bukan admin
        if (!$request->user()->is_admin) {
            // Logout user
            return redirect()->route('logout');
        }

        return $next($request);
    }
}
