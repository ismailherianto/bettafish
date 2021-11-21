<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CekUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$role)
    {
        $user = Auth::user();
        if($user && $user->role != $role)
        {
            return redirect('/');
        }
        else 
        {
            return $next($request);
        }
    }
}
