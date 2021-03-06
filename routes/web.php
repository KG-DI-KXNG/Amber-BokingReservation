<?php

use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Welcome;
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

Route::get('/', [Welcome::class, 'index']);

Route::get('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout']);
Route::post('login', [LoginController::class, 'post_login']);


Route::view('contact', 'contact');
Route::view('pricing', 'pricing');
Route::view('destination', 'destination');
Route::view('destination/{program}', 'destination');
Route::view('Admin', 'AdminPortal');
Route::view('admin-pay', 'admin_payments');
Route::view('admindash', 'admindash');


Route::resource('dashboard', AdminDashboard::class);
