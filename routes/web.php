<?php

use Illuminate\Support\Facades\Route;

Route::view('dashboard', 'welcome');

Route::view('/', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('rates', 'rates')
    ->middleware(['auth'])
    ->name('rates');

Route::view('events', 'events')
    ->middleware(['auth'])
    ->name('events');

require __DIR__.'/auth.php';
