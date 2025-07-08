<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Frontend\CondidateController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::middleware('guest')->group(function () {
    Route::get('login', [CondidateController::class, 'login'])->name('frontend.login');
    Route::post('login', [CondidateController::class, 'loginStore'])->name('frontend.login_store');
    Route::post('register', [CondidateController::class, 'registerCondidate'])->name('frontend.register');
});

Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'home'])->name('frontend.home');
});


