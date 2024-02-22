<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class haRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$role): Response
    {

        if (!$request->user()) {
            return abort(403, 'Tidak ada Akses :(');
        }

        $hasRequiredRole = false;
        foreach ($role as $roles) {
            if ($request->user()->hasRole($roles)) {
                $hasRequiredRole = true;
                break;
            }
        }

        if ($hasRequiredRole) {
            return $next($request);
        }

        return abort(403, 'Tidak ada Akses :(');
    }
}
