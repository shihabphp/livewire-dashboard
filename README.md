## Requirements
- [Laravel 8](https://laravel.com/docs/8.x)
- [Livewire](https://laravel-livewire.com/)
- [Tailwind](https://tailwindcss.com/)
- [Alpine JS](https://github.com/alpinejs/alpine)



## Installation

You can install the package via composer:

```bash
composer require shihabphp/livewire-dashboard
```


## Publish the migrations


To create the dashboard_tiles table, you must create and run the migration.
```bash
php artisan vendor:publish --provider="Shihabphp\Dashboard\DashboardServiceProvider" --tag="dashboard-migrations"
php artisan migrate```



## Creating your dashboard

In your Laravel app, create a new route . The url can be whatever you want.
```php
Route::get('dashboard', Shihabphp\Dashboard\Http\Livewire\DashboardComponent::class);```


## Customizing the views

If you want to customize the view used to render the dashboard and the tiles, run this command:
```bash
php artisan vendor:publish --provider="Shihabphp\Dashboard\DashboardServiceProvider" --tag="dashboard-views"
```