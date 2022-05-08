<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;
use Tymon\JWTAuth\Facades\JWTAuth;

class ApiProtectedRoute extends BaseMiddleware
{
    public function handle($request, Closure $next)
	{
		try {
			$user = JWTAuth::parseToken()->authenticate();

			/* if (!$user->active) {
				return response()->json(['message' => 'User is inactive']);
			} */
		} catch (\Exception $e) {

			if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException) {

				return response()->json(['message' => 'Token is invalid']);
			} else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException) {

				return response()->json(['message' => 'Token is expired']);
			} else {
				return response()->json(['message' => 'Authorization Token not found']);
			}
		}
		return $next($request);
	}
}
