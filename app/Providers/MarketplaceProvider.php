<?php

namespace App\Providers;

use App\Entities\Marketplace;
use App\Interfaces\MarketplaceInterface;
use Illuminate\Support\ServiceProvider;

class MarketplaceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(MarketplaceInterface::class, function($app){
           return new Marketplace() ;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
