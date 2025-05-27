<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

Route::view('dashboard', 'welcome');

Route::view('/', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/dashboard', function () {
    return redirect()->route('dashboard');
})->middleware(['auth', 'verified'])
    ->name('dash');


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('rates', 'rates')
    ->middleware(['auth'])
    ->name('rates');

Route::view('events', 'events')
    ->middleware(['auth'])
    ->name('events');

Route::view('rankings', 'rankings')
    ->middleware(['auth'])
    ->name('rankings');

Route::view('parity', 'parity')
    ->middleware(['auth'])
    ->name('parity');


Route::get('booking-list', [BookingController::class, 'bookingList'])->name('list');

require __DIR__.'/auth.php';
