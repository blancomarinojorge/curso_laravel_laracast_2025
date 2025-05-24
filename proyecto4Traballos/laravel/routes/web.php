<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SearchJobController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'jobs')
    ->middleware('auth')
    ->name('home');
Route::get('/jobs', [JobController::class, 'index'])
    ->middleware('auth')
    ->name('jobs.index');

Route::get('/searchJob', SearchJobController::class)->name('searchJob');
Route::get('/searchJobs/{tag:name}', [SearchJobController::class, 'searchByTag'])->name('searchJobsByTag');

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisterUserController::class, 'store'])->name('register.store');
    Route::get('/login',[SessionController::class,'create'])->name('login');
    Route::post('/login',[SessionController::class,'store'])->name('login.store');
});

Route::delete('/login',[SessionController::class,'destroy'])->name('login.destroy');
