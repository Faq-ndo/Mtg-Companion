<?php

namespace App\Providers;

use App\src\Domain\Repository\Card\CardRepository;
use App\src\Domain\Repository\Set\SetRepository;
use App\src\Infrastructure\RepositoryInterface\ScryfallAPI\ScryfallCardRepository;
use App\src\Infrastructure\RepositoryInterface\ScryfallAPI\ScryfallSetRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            CardRepository::class,
            ScryfallCardRepository::class
        );
        $this->app->bind(
            SetRepository::class,
            ScryfallSetRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
