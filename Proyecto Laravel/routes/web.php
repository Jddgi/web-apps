<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;

// Requirement 1: Landing Page for guest users
Route::get('/', function () {
    return view('landingpage');
})->name('landingpage');

Auth::routes();

// Requirement 2 & 4: Dashboard route protected by auth middleware
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Redirect /home to /dashboard for backwards compatibility
Route::get('/home', function() {
    return redirect()->route('dashboard');
});
