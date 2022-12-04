<?php

namespace App\Http\Middleware\Admin;

use Closure;

class AdminGuardMiddleware
{
    public function handle($request, Closure $next)
    {
        config(['auth.defaults.guard' => 'admin']);
        return $next($request);
    }
}
