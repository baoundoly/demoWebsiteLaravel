<?php

namespace App\Providers;

use App\Models\SiteSetting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //services
        $this->app->bind(
            'App\Services\PageService\PageService',
            'App\Services\PageService\EloquentPageService',
        );

        //repositories
        $this->app->bind(
            'App\Repositories\PageRepository\PageRepository',
            'App\Repositories\PageRepository\EloquentPageRepository',
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        if($this->app->environment('production')) {
            \URL::forceScheme('https');
        }
        
        if (\Schema::hasTable('site_settings')) {
            View::share('site_setting', SiteSetting::first());
        }
        
       auth()->setDefaultDriver(getGuard());

    }
}
