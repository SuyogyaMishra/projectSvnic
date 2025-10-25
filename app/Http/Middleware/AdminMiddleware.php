<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        /** @var \Illuminate\Contracts\Auth\Guard $auth */
        $auth = Auth::guard();

        // Only allow logged-in users with role = 1 (admin)
        if (!$auth->check() || $auth->user()->role != 2) {
            return redirect('/login-form'); // or abort(403)
        }

        return $next($request);
    }
}
