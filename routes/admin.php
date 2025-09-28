<?php

use App\Http\Controllers\Backend\Admin\AdminController;

use App\Http\Controllers\Backend\Admin\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;



Route::group(['as' => 'admin.'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');
    Route::resource('users', AdminController::class);
    require __DIR__ . '/adminAuth.php';
});
