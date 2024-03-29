<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user() != null) {
            if(Auth::user()->id == env('ADMIN_ID')) {
                return $next($request);
            }
        }

        return redirect(route('error.403'));
    }
}
