<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\FirebaseAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('admin/layout', 'admin/layout')->name('admin.layout');

Route::view('admin/login','admin.login')->name('admin.login');
Route::post('admin/auth',[AuthController::class,'login'])->name('admin.auth');
Route::get('admin/logout',[AuthController::class,'logout'])->name('admin.logout');


Route::get('auth',[FirebaseAuthController::class,'auth'])->name('auth');
