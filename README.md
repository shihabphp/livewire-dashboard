# Create Dashboard

Using this package you can create beautiful dashboards. The dashboard consists of tile which are, under the hood, Livewire components that can update themselves via polling. 

This package contains the base functionality:

- the base css
- a `dashboard` view component
- a `tile` view component to position stuff on the dashboard
- a `Tile` model to persist fetched data that tiles can use to store fetched data

## Requirements
- [Laravel 8](https://laravel.com/docs/8.x)
- [Livewire](https://laravel-livewire.com/)
- [Tailwind](https://tailwindcss.com/)
- [Alpine JS](https://github.com/alpinejs/alpine)
<<<<<<< HEAD
=======


>>>>>>> 335872245ab99eaa78da6c0474726d60d945b248

## Installation

<<<<<<< HEAD

## Installation

=======
>>>>>>> 335872245ab99eaa78da6c0474726d60d945b248
You can install the package via composer:

```bash
composer require shihabphp/livewire-dashboard
```


## Publish the migrations


To create the dashboard_tiles table, you must create and run the migration.
```bash
php artisan vendor:publish --provider="Shihabphp\Dashboard\DashboardServiceProvider" --tag="dashboard-migrations"
<<<<<<< HEAD
php artisan migrate```
=======
php artisan migrate
```



## Creating your dashboard

In your Laravel app, create a new route . The url can be whatever you want.


 In your Laravel app, create a new route and view. The url and view name can be whatever you want.


```php
Route::view('dashboard-url', 'dashboard-blade-view');
```

In your Blade view, use the dashboard Blade view component.

```bash
 <livewire:livewire-dashboard />
```

## Customizing the views

If you want to customize the view used to render the dashboard and the tiles, run this command:
```bash
php artisan vendor:publish --provider="Shihabphp\Dashboard\DashboardServiceProvider" --tag="dashboard-views"
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing
>>>>>>> 335872245ab99eaa78da6c0474726d60d945b248

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

<<<<<<< HEAD
## Creating your dashboard

In your Laravel app, create a new route . The url can be whatever you want.
```php
Route::get('dashboard', Shihabphp\Dashboard\Http\Livewire\DashboardComponent::class);```
=======
If you discover any security related issues, please email shihab640@hotmail.com instead of using the issue tracker.

## Credits
>>>>>>> 335872245ab99eaa78da6c0474726d60d945b248

- [Muhammed Shihab](https://github.com/shihabphp)

<<<<<<< HEAD
## Customizing the views

If you want to customize the view used to render the dashboard and the tiles, run this command:
```bash
php artisan vendor:publish --provider="Shihabphp\Dashboard\DashboardServiceProvider" --tag="dashboard-views"
```
=======
## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
>>>>>>> 335872245ab99eaa78da6c0474726d60d945b248
