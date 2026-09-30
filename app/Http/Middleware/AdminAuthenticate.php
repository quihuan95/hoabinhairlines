<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class AdminAuthenticate
{
    public function handle($request, Closure $next)
    {
        if (!Session::get('admin_id')) {
            if ($request->expectsJson() || $request->ajax()) {
                return response()->json(['message' => 'Unauthenticated.'], 401);
            }
            return redirect('/admin/login');
        }

        return $next($request);
    }
}
