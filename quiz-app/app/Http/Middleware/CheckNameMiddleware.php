<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckNameMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->input('name') !== 'my-super-middleware') {
            // Redirect to the error page if the 'name' parameter is not 'my-super-middleware'
            return redirect('/error');
        }

        return $next($request);
    }
}
