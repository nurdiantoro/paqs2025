<?php

namespace App\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->register(\Milon\Barcode\BarcodeServiceProvider::class);

        // Register the alias dynamically
        $loader = AliasLoader::getInstance();
        $loader->alias('DNS1D', \Milon\Barcode\Facades\DNS1DFacade::class);
        $loader->alias('DNS2D', \Milon\Barcode\Facades\DNS2DFacade::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
