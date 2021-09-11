<?php

namespace Shihabphp\Dashboard;
use Livewire\Livewire;
use Illuminate\Support\ServiceProvider;
use Shihabphp\Dashboard\Http\Livewire\Charts\BarChartComponent;
use Shihabphp\Dashboard\Http\Livewire\Charts\PieChartComponent;
use Shihabphp\Dashboard\Http\Livewire\Charts\LineChartComponent;
use Shihabphp\Dashboard\Http\Livewire\Charts\ColumnChartComponent;
use Shihabphp\Dashboard\Facades\Dashboard;

class ChartTileServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Livewire::component('line-chart-tile', LineChartComponent::class);
        Livewire::component('bar-chart-tile', BarChartComponent::class);
        Livewire::component('column-chart-tile', ColumnChartComponent::class);
        Livewire::component('pie-chart-tile', PieChartComponent::class);

        $this->publishes([
            __DIR__.'/../resources/views/chart-tiles' => resource_path('views/vendor/dashboard-chart-tiles'),
        ], 'dashboard-chart-tiles');

        $this->loadViewsFrom(__DIR__.'/../resources/views/chart-tiles', 'dashboard-chart-tiles');
    }
}