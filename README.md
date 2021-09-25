## Requirements
The livewire-dashboard package requires PHP 7.4+, Laravel 8+ and Livewire 2+ .
This package uses json columns. MySQL 5.7 or higher is required.


## Installation & setup
You can install the package via composer:
composer require shihabphp/livewire-dashboard

To create the dashboard_tiles table, you must create and run the migration.

php artisan vendor:publish --provider="Shihabphp\Dashboard\DashboardServiceProvider" --tag="dashboard-migrations"
php artisan migrate



## Creating your first dashboard




