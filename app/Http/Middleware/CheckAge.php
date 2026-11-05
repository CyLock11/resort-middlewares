<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->user()->age < 18) {
            return redirect('/panel')
                ->with('error', 'Acceso denegado: Debes ser mayor de edad');
        }

        return $next($request);
    }
}
