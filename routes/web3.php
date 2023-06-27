<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
Route::prefix('/')->group(function () {
    Route::get('/', [LandingController::class, 'index'])->name('landing.index');
    Route::get('/select-booking', [LandingController::class, 'select'])->name('landing.select');
    Route::get('/allpackage', [LandingController::class, 'allpackage'])->name('landing.allpackage');
    Route::get('/booknow', [LandingController::class, 'booknow'])->name('landing.booknow');
    Route::post('/store', [LandingController::class, 'store'])->name('landing.store');
});

Auth::routes();
//Language Translation
Route::get('login/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);
// Route::get('/login', [App\Http\Controllers\HomeController::class, 'login']);

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'root'])->name('index');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout']);
// Route::get('/calendar-event', [App\Http\Controllers\HomeController::class, 'root']);
// Route::post('/calendar-crud-ajax', [App\Controllers\Http\HomeController::class, 'calendarEvents']);

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

// Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

// Route::prefix('schedule')->group(function () {
//     Route::get('/', [ScheduleController::class, 'index'])->name('schedule.index');
// Route::post('/store', [App\Http\Controllers\ScheduleController::class, 'store'])->name('schedule.store');
// Route::get('/edit/{id}', [App\Http\Controllers\ScheduleController::class, 'edit'])->name('schedule.edit');
// Route::post('/update/{id}', [App\Http\Controllers\ScheduleController::class, 'update'])->name('schedule.update');
// Route::get('/delete/{id}', [App\Http\Controllers\ScheduleController::class, 'delete'])->name('schedule.delete');

// });

Route::prefix('booking')->group(function () {

    Route::get('/', [BookingController::class, 'index'])->name('booking.index');
    Route::get('/update_status_booking', [BookingController::class, 'update_status_booking'])->name('booking.update_status_booking');
    Route::get('/booking_pdf', [BookingController::class, 'booking_pdf'])->name('booking.booking_pdf');
    Route::get('/detail/{id}', [BookingController::class, 'show'])->name('booking.detail');
    Route::get('/edit', [BookingController::class, 'edit'])->name('booking.edit');
    Route::get('/create', [BookingController::class, 'create'])->name('booking.create');
    Route::post('/store', [BookingController::class, 'store'])->name('booking.store');
    Route::put('/{id}', [BookingController::class, 'update'])->name('booking.update');
    Route::delete('/destroy', [BookingController::class, 'destroy'])->name('booking.destroy');
    Route::get('/{id}', [BookingController::class, 'getBookingById'])->name('booking.getBookingById');

});

Route::prefix('product')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('product.index');
    Route::get('/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
});

Route::prefix('testimoni')->group(function () {
    Route::get('/get_testimoni', [TestimoniController::class, 'getTestimoni'])->name('testimoni.get_testimoni');
    Route::get('/', [TestimoniController::class, 'index'])->name('testimoni.index');
    Route::get('/create', [TestimoniController::class, 'create'])->name('testimoni.create');
    Route::post('/store', [TestimoniController::class, 'store'])->name('testimoni.store');
    Route::get('/edit/{id}', [TestimoniController::class, 'edit'])->name('testimoni.edit');
    Route::put('/update/{id}', [TestimoniController::class, 'update'])->name('testimoni.update');
    Route::delete('/destroy/{id}', [TestimoniController::class, 'destroy'])->name('testimoni.destroy');
});

Route::prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('user.index');
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy');
});
