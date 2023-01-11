<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserNoAutorizadoMiddleware
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
        if (auth()->user()->auth==0) {
            return $next($request);
        }
        elseif (auth()->user()->auth==2){
            return redirect('/admin');
        }

        elseif (auth()->user()->auth==1){
            return redirect('/dashboard');
        }
    }
}
