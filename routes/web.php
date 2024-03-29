<?php

use App\Http\Controllers\AuthController;

use App\Http\Controllers\BannerController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TraineeController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\TrainerEventController;
use App\Http\Controllers\TrainerSaleController;
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

Route::view('admin/login', 'auth.login')->name('admin.login');
Route::post('admin/auth', [AuthController::class, 'login'])->name('admin.auth');
Route::get('admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::group(['middleware' => 'firebase'], function () {

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('trainer/approved/index', [TrainerController::class, 'aprrovedTrainers'])->name('trainer.index');
    Route::get('trainer/pending/index', [TrainerController::class, 'pendingTrainers'])->name('trainer.pending');
    Route::get('trainer/rejected/index', [TrainerController::class, 'rejectedTrainers'])->name('trainer.rejected');
    Route::get('trainer/posts/{id}', [TrainerController::class, 'trainerPosts'])->name('trainer.posts');
    Route::get('trainer/events', [TrainerEventController::class, 'index'])->name('trainer.event');
    Route::get('events/{id}', [TrainerEventController::class, 'events'])->name('events');
    Route::get('trainees', [TraineeController::class, 'index'])->name('trainees');
    Route::get('reports', [ReportController::class, 'index'])->name('reports');
    Route::get('orders', [OrderController::class, 'index'])->name('orders');
    Route::get('trainer/approve/{id}', [TrainerController::class, 'approve'])->name('trainer.approve');
    Route::get('trainer/delete/{id}', [TrainerController::class, 'delete'])->name('trainer.delete');

    Route::get('banner/index', [BannerController::class, 'index'])->name('banner.index');
    Route::post('banner/update', [BannerController::class, 'update'])->name('banner.update');
    Route::get('couponcode/index', [CouponController::class, 'index'])->name('coupon.index');
    Route::get('allcoupon/index', [CouponController::class, 'setDummyCoupon'])->name('coupon.show');
    Route::post('allcoupon/store', [CouponController::class, 'store'])->name('coupon.store');
    Route::get('coupon/create', [CouponController::class, 'create'])->name('coupon.create');
    Route::get('coupon/delete/{id}', [CouponController::class, 'delete'])->name('coupon.delete');
    Route::post('coupon/update', [CouponController::class, 'update'])->name('coupon.update');

    Route::get('sales/graph', [SalesController::class, 'index'])->name('sales.graph');
    Route::post('graph/filter', [SalesController::class, 'filter'])->name('graph.filter');
    Route::get('sales/allsales', [TrainerSaleController::class, 'index'])->name('sales.allsales');
    Route::post('sales/filter', [TrainerSaleController::class, 'filter'])->name('sales.filter');
});
