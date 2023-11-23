<?php

namespace App\Http\Middleware;

use App\Exceptions\InvalidXClientHeaderException;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckClientHeader
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->header('X-Client') !== config('services.companies_api.x-client_header')) {
            throw new InvalidXClientHeaderException();
        }

        return $next($request);
    }
}
