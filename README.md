# Create Dashboard

Using this package you can create beautiful dashboards.

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


Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email shihab640@hotmail.com instead of using the issue tracker.

## Credits

- [Muhammed Shihab](https://github.com/shihabphp)


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

