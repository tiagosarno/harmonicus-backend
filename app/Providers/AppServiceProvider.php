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
