<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'check.membership:1,2']], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    
    // Customer Management
    Route::get('/customer', [CustomerController::class, 'index'])->name('customer');
    Route::get('/customer/add', [CustomerController::class, 'create'])->name('customer.create');
    Route::post('customer/store', [CustomerController::class, 'store'])->name('customer.store');
});

Route::group(['middleware' => ['auth', 'check.membership:3,4,5']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('user.dashboard');
});
