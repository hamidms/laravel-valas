<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MembershipController;

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
    Route::get('/customer/{user_id}/edit', [CustomerController::class, 'edit'])->name('customer.edit');
    Route::post('customer/{user_id}/update', [CustomerController::class, 'update'])->name('customer.update');
    Route::delete('customer/{user_id}/delete', [CustomerController::class, 'delete'])->name('customer.delete');

    // Customer Management
    Route::get('/membership', [MembershipController::class, 'index'])->name('membership');
    Route::get('/membership/add', [MembershipController::class, 'create'])->name('membership.create');
    Route::post('membership/store', [MembershipController::class, 'store'])->name('membership.store');
    Route::get('/membership/{membership_id}/edit', [MembershipController::class, 'edit'])->name('membership.edit');
    Route::post('membership/{membership_id}/update', [MembershipController::class, 'update'])->name('membership.update');
    Route::delete('membership/{membership_id}/delete', [MembershipController::class, 'delete'])->name('membership.delete');
});

Route::group(['middleware' => ['auth', 'check.membership:3,4,5']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('user.dashboard');
});
