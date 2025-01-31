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
        // Binding All Repositories with yours Contracts
        $this->app->bind(
            'App\Repositories\Contracts\AdminRepositoryInterface',
            'App\Repositories\Eloquent\AdminRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\ArticleRepositoryInterface',
            'App\Repositories\Eloquent\ArticleRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\CostRepositoryInterface',
            'App\Repositories\Eloquent\CostRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\MessageRepositoryInterface',
            'App\Repositories\Eloquent\MessageRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\PatientRepositoryInterface',
            'App\Repositories\Eloquent\PatientRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\ProductRepositoryInterface',
            'App\Repositories\Eloquent\ProductRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\PsychologistRepositoryInterface',
            'App\Repositories\Eloquent\PsychologistRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\PsyScheduleRepositoryInterface',
            'App\Repositories\Eloquent\PsyScheduleRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\RatingRepositoryInterface',
            'App\Repositories\Eloquent\RatingRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\ScheduleRepositoryInterface',
            'App\Repositories\Eloquent\ScheduleRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\StatisticRepositoryInterface',
            'App\Repositories\Eloquent\StatisticRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\SupportRepositoryInterface',
            'App\Repositories\Eloquent\SupportRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\UserRepositoryInterface',
            'App\Repositories\Eloquent\UserRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\VideoRepositoryInterface',
            'App\Repositories\Eloquent\VideoRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\WalletRepositoryInterface',
            'App\Repositories\Eloquent\WalletRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\SpecialityRepositoryInterface',
            'App\Repositories\Eloquent\SpecialityRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\RegionalRepositoryInterface',
            'App\Repositories\Eloquent\RegionalRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\AreaRepositoryInterface',
            'App\Repositories\Eloquent\AreaRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\ThemeRepositoryInterface',
            'App\Repositories\Eloquent\ThemeRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\MediaThemeRepositoryInterface',
            'App\Repositories\Eloquent\MediaThemeRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\CountryRepositoryInterface',
            'App\Repositories\Eloquent\CountryRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\StateRepositoryInterface',
            'App\Repositories\Eloquent\StateRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\CityRepositoryInterface',
            'App\Repositories\Eloquent\CityRepository'
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
