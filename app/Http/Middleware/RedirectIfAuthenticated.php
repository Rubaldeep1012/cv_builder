<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
       
        if (Auth::guard($guard)->check()) {
            $id=Auth::user()->id;
            $role_id=Auth::user()->role_id;
            if($role_id==1)
            {
                return redirect("/user-job-seeker/$id");
            }
            else
            {
                return redirect("/user-employer/$id");
            }
        }

        return $next($request);
    }
}
