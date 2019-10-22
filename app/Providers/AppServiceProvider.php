<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Facades\Voyager;

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
        Schema::defaultStringLength(191);
        Voyager::addAction(\App\Actions\PDF::class);
        Voyager::addAction(\App\Actions\Questions::class);
        Voyager::addAction(\App\Actions\EstimateApproved::class);
        // Voyager::addAction(\App\Actions\UserEdit::class);
    }
}
