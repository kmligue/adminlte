<?php

namespace KMLigue\AdminLTE;

use Illuminate\Support\ServiceProvider;

class AdminLTEServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__ . '/views' => base_path('resources/views/kmligue/adminlte')], 'adminlte');
        $this->publishes([__DIR__ . '/assets' => public_path('assets')], 'adminlte');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
