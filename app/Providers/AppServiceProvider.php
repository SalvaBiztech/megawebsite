<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Statamic\Statamic;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            'Statamic\Fields\BlueprintRepository',
            'Daynnnnn\StatamicDatabase\Blueprints\BlueprintRepository'
        );
    
        $this->app->singleton(
            'Statamic\Fields\FieldsetRepository',
            'Daynnnnn\StatamicDatabase\Fieldsets\FieldsetRepository'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Statamic::script('app', 'cp');
        // Statamic::style('app', 'cp');
    }
}
