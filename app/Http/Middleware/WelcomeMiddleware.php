<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class WelcomeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->session()->has('welcome')) {
            $request->session()->put('welcome', true);
            session()->flash('success-login', 'Selamat datang, ' . auth()->user()->name . '!');
        }
        return $next($request);
    }
}
