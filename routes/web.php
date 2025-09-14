<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are assigned to the "web" middleware group which provides
| session state, CSRF protection, and cookie encryption.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/home', [HomeController::class, 'index'])->name('home');


// Example route with named route and middleware
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('/profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});

// Admin area with prefix and middleware
Route::prefix('admin')->name('admin.')->middleware(['auth', 'can:access-admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // More admin routes...
});

// Example controller resource (pages with web views)
Route::resource('pages', App\Http\Controllers\PageController::class)->only(['index', 'show']);

// Fallback route (for single page apps or friendly 404 handling)
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});

*/
