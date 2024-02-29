<?php

namespace Rossicampos\BladeComponents;

use Illuminate\Support\ServiceProvider;

class BladeComponentsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'bladecomponents');

        $this->publishes([__DIR__.'/../resources/views/components' => resource_path('views/components')], 'components');

        $this->publishes([__DIR__.'/../public' => public_path('vendor/bladecomponents')], 'public');
    }
}
