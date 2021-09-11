<?php

namespace Shihabphp\Dashboard;
use Shihabphp\Dashboard\Http\Livewire\BasicKPITileComponent;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class KPITileServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Livewire::component('basic-kpi-tile', BasicKPITileComponent::class);

        $this->publishes([
            __DIR__ . '/../resources/views/kpi-tiles' => resource_path('views/vendor/dashboard-basic-kpi-tiles'),
        ], 'dashboard-kpi-tiles');

        $this->loadViewsFrom(__DIR__ . '/../resources/views/kpi-tiles', 'dashboard-kpi-tiles');
    }  
}

