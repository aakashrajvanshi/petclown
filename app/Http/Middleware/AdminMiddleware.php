<?php

namespace App\Http\Middleware;

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
        if($request->user()){
            if(!user_is_admin($request->user()))
            {
                return ('Unauthorised Access! Only admin can access this page!');
            }
        }
        else{
            return redirect()->guest('auth/login');
        }
        return $next($request);
    }
}
