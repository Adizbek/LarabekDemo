<?php

namespace App\Providers;

use Adizbek\Larabek\Larabek;
use App\Entities\PostEntity;
use App\Entities\UserEntity;
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
        //

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Larabek::register(UserEntity::class);
        Larabek::register(PostEntity::class);
    }
}
