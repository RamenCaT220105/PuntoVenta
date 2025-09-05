<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    // ... (lo que ya tengas: $middleware, $middlewareGroups, etc.)

    protected $routeMiddleware = [
        // los que ya existen...
        'auth'    => \App\Http\Middleware\Authenticate::class,
        'verified'=> \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,

        // 🔽 agrega estos dos
        'branch'  => \App\Http\Middleware\ResolveBranchFromHeader::class,
        'feature' => \App\Http\Middleware\EnsureBusinessFeature::class,
    ];
}