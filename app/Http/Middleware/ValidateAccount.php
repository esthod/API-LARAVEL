<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ValidateAccount
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Si no está autenticado, redirige al login
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'Debes iniciar sesión.');
        }

        // Si el usuario tiene un remember_token, significa que NO ha activado su cuenta
        if (Auth::user()->remember_token !== null) {
            Auth::logout();
            return redirect('/login')->with('error', 'Por favor, confirma tu cuenta antes de continuar.');
        }

        return $next($request);
    }
}