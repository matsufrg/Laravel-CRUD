<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;


use Closure;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
        // se o usuário for um admin, conseguir entrar na página
        if (Auth::user() &&  Auth::user()->admin == 1) {
            return $next($request);
     }

    return redirect('/users/home');
    }
}
