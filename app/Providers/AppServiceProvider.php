<?php

namespace App\Providers;

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
     * @return void
     */
    public function boot()
    {
        //
    }
}
