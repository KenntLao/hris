<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< Updated upstream

=======
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use Illuminate\Support\Facades\Schema;
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
        //
=======
        Schema::defaultStringLength(191);
        
>>>>>>> Stashed changes
    }
}
