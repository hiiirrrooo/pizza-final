<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DailySalesController;
use App\Http\Controllers\PizzaCountsController;
use App\Http\Controllers\UniqueCustomersController;
use App\Http\Controllers\RunningOrdersController;
use App\Http\Controllers\SuccessfulOrdersController;
use App\Http\Controllers\CancelledOrdersController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/submit', [OrderController::class, 'store']);

Route::get('/admin/dashboard', [DashboardController::class, 'show']);
Route::get('/admin/orders', [DashboardController::class, 'showOrders']);
Route::get('/admin/reports', [DashboardController::class, 'showReports']);
Route::get('/admin/orderhistory', [DashboardController:: class, 'showHistory']);

Route::get('/admin/orders/running', [RunningOrdersController::class, 'show']);
Route::post('/admin/orders/running/done/{order_id}', [RunningOrdersController::class, 'done']);
Route::post('/admin/orders/running/cancel/{order_id}', [RunningOrdersController::class, 'cancel']);

Route::get('/admin/orders/successful', [SuccessfulOrdersController::class, 'show']);

Route::get('/admin/orders/cancelled', [CancelledOrdersController::class, 'show']);

Route::any('/admin/reports/sales', [DailySalesController::class, 'show']);

Route::get('/admin/reports/pizza', [PizzaCountsController::class, 'show']);

Route::get('/admin/reports/unique', [UniqueCustomersController::class, 'show']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
