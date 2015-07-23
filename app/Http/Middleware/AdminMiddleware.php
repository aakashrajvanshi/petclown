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
            if($request->user()->email!="aakash@careerty.com" &&  $request->user()->email!="suryasteja59@gmail.com")
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
