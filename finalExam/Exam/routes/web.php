<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/insertOrder', [App\Http\Controllers\OrderController::class, 'create'])->name('insertOrder');

Route::post('/insertOrder/store', [App\Http\Controllers\OrderController::class, 'store'])->name('addOrder');

Route::get('/showOrder', [App\Http\Controllers\OrderController::class, 'show'])->name('showOrder');

Route::get('/awbReport', [App\Http\Controllers\AWBController::class, 'awbReport'])->name('awbReport');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
