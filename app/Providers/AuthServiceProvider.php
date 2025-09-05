<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Auth\SalespersonUserProvider;

class AuthServiceProvider extends ServiceProvider
{

    public function boot(): void
    {
        $this->registerPolicies();

        // REGISTRA el driver "salesperson"
        Auth::provider('salesperson', function ($app, array $config) {
            return new SalespersonUserProvider();
        });
    }
}