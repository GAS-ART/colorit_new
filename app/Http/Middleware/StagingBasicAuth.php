<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StagingBasicAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (config('app.env') === 'staging' || config('app.env') === 'local') {
            $username = env('STAGING_USER', 'admin');
            $password = env('STAGING_PASS', 'secret123');

            if ($request->getUser() !== $username || $request->getPassword() !== $password) {
                return response('Увійти заборонено', 401, [
                    'WWW-Authenticate' => 'Basic realm="Staging Environment"'
                ]);
            }
        }

        return $next($request);
    }
}
