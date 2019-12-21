<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class MiddlewareLogueado
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
        $usuarioLogueado = Auth::user();
        if ($usuarioLogueado->id == null) {
            return redirect("register");
        } else {
        };
        return $next($request);
    }
}
