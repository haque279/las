<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class auth_rubel
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
        if (isset(Auth::user()->email)){
            $email = Auth::user()->email;
        }else {
            $email = 'email@email.com';
        }

        if ($email == 'haque279@gmail.com') {
            return $next($request);
        }else {
            return back();
        }
    }
}
