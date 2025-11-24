<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\Auth\AdminLoginController;
use App\Http\Controllers\Backend\DashboardController;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/booking', [App\Http\Controllers\Frontend\BookingController::class, 'store'])->name('booking.store');

// Static Pages
Route::controller(App\Http\Controllers\Frontend\PageController::class)->group(function () {
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/products', 'products')->name('products');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/initiatives', 'initiatives')->name('initiatives');
    // Catch-all for other static pages
    Route::get('/page/{page}', 'show')->name('page.show');
});

/*
|--------------------------------------------------------------------------
| Backend (Admin) Routes
|--------------------------------------------------------------------------
*/

// Admin Login Routes (Guest)
Route::prefix('admin')->group(function () {
    Route::get('login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [AdminLoginController::class, 'login'])->name('admin.login.submit');
});

// Admin Protected Routes
Route::prefix('admin')->middleware('admin.auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('bookings', App\Http\Controllers\Backend\BookingController::class)->only(['index', 'show']);
    Route::post('logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
});
