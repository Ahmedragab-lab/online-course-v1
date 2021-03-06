<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Owner
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
        $user=auth()->user();
        if($user->email == OWNER || $user->email == PROGRAMMER){

            return $next($request);
        }else{
            return abort(404);
        }
    }
}
