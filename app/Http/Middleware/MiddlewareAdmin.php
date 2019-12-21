<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class MiddlewareAdmin
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
        if ($usuarioLogueado->id == 1) {
        } else {
            return redirect("inicio");
        };
        return $next($request);
    }
}
