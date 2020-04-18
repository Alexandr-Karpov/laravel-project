<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if(Auth::check())
        {
            $user= Auth::user();
            if($user->role_id == $role) {
                return $next($request);
            } else {
                abort(403);
            }
        } else {
            return redirect('login');
        }
    }
}
