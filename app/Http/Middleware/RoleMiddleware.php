<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    public function handle($request, Closure $next, ...$roles)
    {
        if (in_array(auth()->user()->role, $roles)) {
            return $next($request);
        }

        return redirect('dashboard');
    }
}
