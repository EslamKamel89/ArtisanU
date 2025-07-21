<?php

namespace App\Http\Middleware;

use Closure;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfNotAdmin {
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response {

        try {
            if (!auth()->guard('admin')->check()) {
                throw new ValidationException('You are not logged in as admin');
            }
        } catch (ValidationException $th) {
            return redirect()->route('admin.login');
        }
        return $next($request);
    }
}
