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
    Route::get('/all-products', 'allProducts')->name('all.products');
    Route::get('/careers', 'careers')->name('careers');
    Route::get('/case-studies', 'caseStudies')->name('case.studies');
    Route::get('/case-study-detail', 'caseStudyDetail')->name('case.study.detail');
    Route::get('/conference-room-tables', 'conferenceRoomTables')->name('conference.room.tables');
    Route::get('/conference-rooms', 'conferenceRooms')->name('conference.rooms');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/csr', 'csr')->name('csr');
    Route::get('/enquiry-basket', 'enquiryBasket')->name('enquiry.basket');
    Route::get('/hospitality', 'hospitality')->name('hospitality');
    Route::get('/ideal-workspace', 'idealWorkspace')->name('ideal.workspace');
    Route::get('/initiatives', 'initiatives')->name('initiatives');
    Route::get('/job-aci', 'jobAci')->name('job.aci');
    Route::get('/make-enquiry', 'makeEnquiry')->name('make.enquiry');
    Route::get('/moodboard-detail', 'moodboardDetail')->name('moodboard.detail');
    Route::get('/moodboards', 'moodboards')->name('moodboards');
    Route::get('/product-detail', 'productDetail')->name('product.detail');
    Route::get('/products-type', 'productsType')->name('products.type');
    Route::get('/resource-detail', 'resourceDetail')->name('resource.detail');
    Route::get('/resources', 'resources')->name('resources');
    Route::get('/service-detail', 'serviceDetail')->name('service.detail');
    Route::get('/service-listing', 'serviceListing')->name('service.listing');
    Route::get('/services', 'services')->name('services');
    Route::get('/shop-by-space', 'shopBySpace')->name('shop.by.space');
    Route::get('/sustainability', 'sustainability')->name('sustainability');
    Route::get('/team-member', 'teamMember')->name('team.member');
    Route::get('/user-dashboard', 'userDashboard')->name('user.dashboard');
    
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
