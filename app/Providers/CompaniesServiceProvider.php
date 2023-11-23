<?php

namespace App\Providers;

use App\Services\External\CompaniesAPI\APICompaniesClient;
use App\Services\External\CompaniesAPI\APICompaniesInterface;
use Illuminate\Support\ServiceProvider;

class CompaniesServiceProvider extends ServiceProvider
{
    public $bindings = [
        APICompaniesInterface::class => APICompaniesClient::class,
    ];

    /**
     * Register services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->singleton(APICompaniesClient::class,
            fn () => new APICompaniesClient(
                config('services.companies_api.access_token'),
                config('services.companies_api.uri')
        ));
    }
}
