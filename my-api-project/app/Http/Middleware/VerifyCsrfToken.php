<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/addProd',
        '/products',
        '/products/*',
        '/updateProd/*',
    ];
}

// namespace App\Http\Middleware;

// use Closure;
// use Illuminate\Foundation\Configuration\Middleware;
// use Illuminate\Http\Request;
// use Symfony\Component\HttpFoundation\Response;

// class VerifyCsrfToken extends Middleware
// {
//     /**
//      * Handle an incoming request.
//      *
//      * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
//      */
//     public function handle(Request $request, Closure $next): Response
//     {
//         return $next($request);
//     }
// }
