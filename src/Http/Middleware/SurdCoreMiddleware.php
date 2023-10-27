<?php

namespace Surd\SurdCore\Http\Middleware;
use Closure;
use Surd\SurdCore\Http\Controllers\SurdCoreController;

class SurdCoreMiddleware
{
    public function handle($request, Closure $next)
    {
        $surdcore = new SurdCoreController();
        $surdcore->actch();
        return $next($request);
    }
}
