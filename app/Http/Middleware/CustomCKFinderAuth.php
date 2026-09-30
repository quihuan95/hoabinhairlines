<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class CustomCKFinderAuth
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
        $isAdmin = (bool) Session::get('admin_id');

        config(['ckfinder.authentication' => function () use ($isAdmin) {
            return $isAdmin;
        }]);

        return $next($request);
    }
}
