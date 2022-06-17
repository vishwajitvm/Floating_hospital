<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminMiddleware
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
        if(Auth::user()->usertype == 'admin') {
            return $next($request);
        }
        elseif(Auth::user()->usertype == 'user') {
            return redirect('userdashboard') ;
        }
        else {
            return redirect("completeprofile") ; //change the routing after registation here in future 
        }
    }
}
