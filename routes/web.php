<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TrainerController;
use App\Livewire\Admin\AdminIndex;
use Illuminate\Support\Facades\Route;
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

Route::view('admin/login','auth.login')->name('admin.login');
Route::post('admin/auth',[AuthController::class,'login'])->name('admin.auth');

Route::get('trainer/index',[TrainerController::class,'index'])->name('trainer.index');
Route::get('trainer/approve/{id}',[TrainerController::class,'approve'])->name('trainer.approve');
Route::get('trainer/delete/{id}',[TrainerController::class,'delete'])->name('trainer.delete');



