<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Platform\DashboardController;

Route::middleware(['auth'])
    ->prefix('platform')
    ->name('platform.')
    ->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');

    });