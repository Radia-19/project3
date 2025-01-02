<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        Log::info('UserMiddleware executed for route: ' . $request->path());

        if (Auth::check()) {
            return $next($request);
        } else {
            Log::warning('Unauthenticated access attempt to: ' . $request->path());
            return to_route('login.show')->with('errMsg', 'You Must Login First!');
        }
    }

}
