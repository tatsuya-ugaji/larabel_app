<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\View\Factory;

class SpCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

     public function __construct(Factory $viewFactory)
    {
        $this->viewFactory = $viewFactory;
    }

    public function handle($request, Closure $next)
    {
        $detect = new \Mobile_Detect();
        $this->viewFactory->share('detect', $detect);
        return $next($request);
    }
}
