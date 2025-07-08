<?php

use App\Http\Controllers\Backend\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::middleware('guest')->group(function () {
    Route::get('admin', [AdminController::class, 'create'])->name('backend.login');
    Route::post('admin', [AdminController::class, 'loginStore'])->name('backend.login_store');
});

Route::middleware(['auth', 'admin'])->group(function(){
    Route::prefix('/admin')->group(function(){
        Route::controller(AdminController::class)->group(function(){
            Route::get('dashboard', 'adminDashboard')->name('abckend.dashboard');
        });
    });
});

