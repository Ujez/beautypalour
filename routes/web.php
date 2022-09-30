<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route::get('/home', [HomeController::class, 'redirect']
);
Route::post('/appointments', [HomeController::class, 'appointment']
)->name('appointment');
Route::get('/mybookings', [HomeController::class, 'mybookings']
)->name('mybookings');
Route::get('/showbookings', [AdminController::class, 'showbookings']
)->name('showbookings');
Route::get('/approve_bookings/{id}', [AdminController::class, 'approvebookings']
);
Route::get('/cancel_bookings/{id}', [HomeController::class, 'cancelbookings']
);
Route::get('/cancel_bookings/{id}', [AdminController::class, 'cancelbookings']
);
Route::get('/admin/add', [AdminController::class, 'add']
)->name('add.vendor');
Route::post('/upload_vendor', [AdminController::class, 'upload']
)->name('upload.vendor');
Route::get('/', [HomeController::class, 'index']
)->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});
