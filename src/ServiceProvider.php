<?php

namespace SoluzioneSoftware\LaravelAffiliate\Networks\Zanox;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use SoluzioneSoftware\LaravelAffiliate\Facades\Affiliate;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        Affiliate::registerNetwork(Network::class);
    }
}
