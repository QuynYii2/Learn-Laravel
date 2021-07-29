<?php

namespace App\Providers;

use App\Interfaces\CatPostInterface;
use App\Interfaces\PostInterface;
use App\Repositories\CatPostRepositorie;
use App\Repositories\PostRepositorie;
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
        $this->app->bind(CatPostInterface::class, CatPostRepositorie::class);
        $this->app->bind(PostInterface::class, PostRepositorie::class);
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
