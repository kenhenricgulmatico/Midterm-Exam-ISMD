<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OwnerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

     if (! $request->user() || ! $request->user()->hasRole('owner')) {
            abort(403, 'Deny access if unauthorized');
        }

        return $next($request);
    }
}
