<?php


use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;
use Shihabphp\Dashboard\Http\Livewire\DashboardComponent;

    Route::group(['prefix' => 'dashboard','middleware' => Authenticate::class], function () {
        Route::get('/', DashboardComponent::class)
                ->name('dashboard');
    });
  