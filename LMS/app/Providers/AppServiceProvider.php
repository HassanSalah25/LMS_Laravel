<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
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
        // ADD constrains To yout DB
            
        //string limit contrains
<<<<<<< HEAD
        Schema::defaultStringLength(191);
=======
        Schema::defaultStringLength(500);
>>>>>>> 2317c7ff008a1c6dc57a7b0c8cdd8eb511346a4a

    }
}
