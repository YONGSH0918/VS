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

Route::get('/insertCategory', function () {
    return view('insertCategory');
});

Route::get('/insertStudent', function () {
    return view('insertStudent');
});

Route::post('/insertCategory/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('addCategory');

Route::get('/showCategory', [App\Http\Controllers\CategoryController::class, 'show'])->name('showCategory');


Route::post('/insertStudent/store', [App\Http\Controllers\StudentController::class, 'store'])->name('addStudent');

Route::get('/showStudent', [App\Http\Controllers\StudentController::class, 'show'])->name('showStudent');

Route::get('/insertStudent', [App\Http\Controllers\StudentController::class, 'create'])->name('insertStudent');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
