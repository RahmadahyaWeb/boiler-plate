<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');

    /*
    |--------------------------------------------------------------------------
    | ACCESS CONTROL
    |--------------------------------------------------------------------------
    */

    Route::prefix('access-control')->name('access-control.')->group(function () {

        Route::livewire('roles', 'pages::roles.index')->name('roles.index');

    });

    /*
    |--------------------------------------------------------------------------
    | USER MANAGEMENT
    |--------------------------------------------------------------------------
    */

    Route::prefix('users')->name('users.')->group(function () {

        Route::livewire('/', 'pages::users.index')->name('index');
        Route::livewire('devices', 'pages::user-devices')->name('devices.index');

    });
});

require __DIR__.'/settings.php';
