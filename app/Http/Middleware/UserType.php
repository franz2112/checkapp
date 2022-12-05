<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, string $UserType)
    {
        if ($UserType == 'user' && auth()->user()->usertype !=-0){
            abort(code:403);
        }
        if ($UserType == 'clinics' && auth()->user()->usertype != 1){
            abort(code:403);
        }
        if ($UserType == 'superadmin' && auth()->user()->usertype != 2){
            abort(code:403);
        }
        return $next($request);
    }
}