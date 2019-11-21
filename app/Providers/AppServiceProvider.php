<?php

namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Support\ServiceProvider;
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
        $this->app->bind(
            'App\Repositories\Interfaces\ProjectRepositoryInterface',
            'App\Repositories\ProjectRepository');

        $this->app->bind(
            'App\Repositories\Interfaces\AbsenceRepositoryInterface',
            'App\Repositories\AbsenceRepository');

        $this->app->bind(
            'App\Repositories\Interfaces\AgreementRepositoryInterface',
            'App\Repositories\AgreementRepository');

        $this->app->bind(
            'App\Repositories\Interfaces\AssortmentRepositoryInterface',
            'App\Repositories\AssortmentRepository');

        $this->app->bind(
            'App\Repositories\Interfaces\ContractorRepositoryInterface',
            'App\Repositories\ContractorRepository');

        $this->app->bind(
            'App\Repositories\Interfaces\EmployeeRepositoryInterface',
            'App\Repositories\EmployeeRepository');

        $this->app->bind(
            'App\Repositories\Interfaces\OrderRepositoryInterface',
            'App\Repositories\OrderRepository');

        $this->app->bind(
            'App\Repositories\Interfaces\WorkplaceRepositoryInterface',
            'App\Repositories\WorkplaceRepository');
    }

    /**
     * Bootstrap any application services.
     *
     * @param Dispatcher $events
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add('Menu');
            $event->menu->add([
                'text' => __("Harmonogram"),
                'icon' => '',
                'submenu' => [
                    [
                        'text' =>  __("Dzienny"),
                        'url' => route('project'),
                        'icon' => '',
                    ],
                    [
                        'text' =>  __("Tygodniowy"),
                        'url' => route('project'),
                        'icon' => '',
                    ]
                ]
            ]);
        });
    }
}
