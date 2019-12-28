<?php

namespace App\Http\Middleware;

use Closure;

class RedirectMiddleware
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
        $detect = new \Mobile_Detect();

        if($detect->isMobile() || $detect->isTablet()) {

            return redirect('/home');

        }

        return $next($request);
    }
}
