<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

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
    public function boot(Dispatcher $events)
    {
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add([
                'text'        => 'Dashboard',
                'url'         => 'admin/pages',
                'icon'        => 'fas fa-fw fa-tachometer-alt',
                'label_color' => 'success',
            ]);
            $event->menu->add([
                'key'         => 'recruit',
                'text'        => 'Recruitment',
                'url'         => 'pages/recruitment/',
                'icon'        => 'fas fa-fw fa-th',
                'label'       => 3,
                'label_color' => 'success',
            ]);
            $event->menu->addIn('recruit', [
                'text' => 'Recruitment Setup',
                'icon' => 'fas fa-fw fa-random',
                'url' => 'recruitmentSetup',
            ]);
            $event->menu->addIn('recruit', [
                'text' => 'Job Positions',
                'icon' => 'fas fa-fw fa-columns',
                'url' => 'jobPositions',
            ]);
            $event->menu->addIn('recruit', [
                'text' => 'Candidates',
                'icon' => 'fas fa-fw fa-users',
                'url' => 'candidates',
            ]);
            $event->menu->add('ACCOUNT SETTINGS');
            $event->menu->add([
                'text' => 'profile',
                'url'  => 'admin/settings',
                'icon' => 'fas fa-fw fa-user',
            ]);
            $event->menu->add([
                'text' => 'change_password',
                'url'  => 'admin/settings',
                'icon' => 'fas fa-fw fa-lock',
            ]);
        });
    }
}
