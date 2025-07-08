<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('auth:sanctum')->group(function () {
});

Route::get('/get-countries', [ApiController::class, 'getCountries'])->name('api.get_countries');
Route::get('/get-states', [ApiController::class, 'getStates'])->name('api.get_states');
Route::get('/get-cities', [ApiController::class, 'getCities'])->name('api.get_cities');