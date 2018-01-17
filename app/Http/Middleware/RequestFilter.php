<?php

namespace App\Http\Middleware;

use Closure;

class RequestFilter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // perform before action

        // echo 'before';

        $response = $next($request);

        // perform after action

        // echo 'after';

        return $response;
    }

}
