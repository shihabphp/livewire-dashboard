<?php
namespace Shihabphp\Dashboard;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Shihabphp\Dashboard\Http\Livewire\DashboardComponent;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Blade;
class DashboardServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'dashboard');

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'dashboard');

   
   
    $this
        ->registerPublishables()
        ->registerBladeComponents();




        

     


       
    }



    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/dashboard.php', 'dashboard');
       
    }
    protected function registerPublishables(): self
    {
        if (! class_exists('CreateDashboardTilesTable')) {
            $this->publishes([
                __DIR__ . '/../database/migrations/create_dashboard_tiles_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_dashboard_tiles_table.php'),
            ], 'dashboard-migrations');
        }

      
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/dashboard'),
        ], 'dashboard');

        $this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/dashboard'),
        ]);



        
        return $this;
    }

    protected function registerBladeComponents(): self
    {
       Livewire::component('livewire-dashboard', DashboardComponent::class);
       Blade::component('header', 'components.header');
       Blade::component('secondary-button', 'components.secondary-button');
        return $this;
    }
}