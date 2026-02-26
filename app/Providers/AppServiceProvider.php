<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use RickAndMorty\Domain\Contracts\RickAndMortyApiContract;
use RickAndMorty\Infrastructure\External\RickAndMortyApiAdapter;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            RickAndMortyApiContract::class,
            RickAndMortyApiAdapter::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
