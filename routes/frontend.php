<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Frontend\CondidateController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/get-states/{country_id}', [CondidateController::class, 'getStates'])->name('get.states');
Route::get('/get-cities/{state_id}', [CondidateController::class, 'getCities'])->name('get.cities');


Route::middleware('guest')->group(function () {
    Route::get('login', [CondidateController::class, 'login'])->name('frontend.login');
    Route::post('login', [CondidateController::class, 'loginStore'])->name('frontend.login_store');
    Route::post('register', [CondidateController::class, 'registerCondidate'])->name('frontend.register');
});

Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'home'])->name('frontend.home');
    Route::get('/profile', [HomeController::class, 'userprofile'])->name('frontend.user-profile');
    Route::get('/jobs', [HomeController::class, 'jobsDashboard'])->name('jobs');
    Route::get('/apply-jobs', [HomeController::class, 'applyJobs'])->name('frontend.apply-jobs');
    Route::get('/aviation',[HomeController::class,'nonAviation'])->name('frontend.aviation');
    Route::post('/update-personal-details', [HomeController::class, 'updatePersonalDetails'])->name('frontend.update-personal-details');
    Route::post('/update-skills', [HomeController::class, 'updateSkill'])->name('frontend.update-skills');
    Route::post('/update-employment', [HomeController::class, 'updateEmployement'])->name('frontend.add-employment');
    Route::post('/update-it-skills',[HomeController::class,'updateitSkills'])->name('frontend.add-itskill');
    Route::post('/add-profile-summary',[HomeController::class,'updateprofileSummary'])->name('frontend.add-profile-summary');

    // Routes for Education
    Route::post('/add-education-details', [HomeController::class, 'addEducationDetails'])->name('frontend.add-education-details');
    // Route::post('/update-education-details/{id}', [HomeController::class, 'updateEducationDetails'])->name('frontend.update-education-details');
    // Route::get('/get-education-details/{id}', [HomeController::class, 'getEducationDetails'])->name('frontend.get-education-details');
});



