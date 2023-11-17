<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\FirebaseAuthController;
use App\Livewire\Admin\Index;
use App\Livewire\Auth\Login;

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

Route::get('/', [TestController::class, 'index'])->name('home');

Route::view('admin/layout', 'admin/layout')->name('admin.layout');

Route::view('admin/login','admin.login')->name('admin.login');
Route::post('admin/auth',[AuthController::class,'login'])->name('admin.auth');
Route::get('admin/logout',[AuthController::class,'logout'])->name('admin.logout');


Route::get('admin/index',Index::class)->name('admin.index');
Route::get('admin/login',Login::class)->name('admin.login');



