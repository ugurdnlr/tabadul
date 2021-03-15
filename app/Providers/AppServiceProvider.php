<?php

namespace App\Providers;

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\View;
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
        View::composer('*', function ($view) {
            $customers = app()->call('App\Http\Controllers\CustomerController@getCustomer');

            $view->with('customers', $customers);
        });
    }
}
