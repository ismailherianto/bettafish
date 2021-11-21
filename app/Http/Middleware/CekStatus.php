<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CekStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$status)
    {
        $user = Auth::user();
        if($user && $user->status != $status)
        {
            return redirect('/');
        }
        else 
        {
            return $next($request);
        }
    }
}
