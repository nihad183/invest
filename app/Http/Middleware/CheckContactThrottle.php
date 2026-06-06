<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Cache;


class CheckContactThrottle
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

public function handle(Request $request, Closure $next)
{
    $ip = $request->ip();
    $key = 'contact_form_' . $ip;

    if (Cache::has($key)) {
        return response()->json(['error' => 'Merci d’attendre avant de renvoyer un message.'], 429);
    }

    Cache::put($key, true, 60);

    return $next($request);
}

}
