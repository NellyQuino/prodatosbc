<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EsAdmin
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
        $user = Auth::user();
        if (Auth::check() && !$user->esAdmin()  &&  Auth::user()->rol_id == '2') {
            return redirect('/compromisos');
        }elseif(Auth::check()  && $user->esAdmin() &&  Auth::user()->rol_id == '1'){
            
            return $next($request);
        }
        
        else{
            return redirect('/');
        }
    }
}