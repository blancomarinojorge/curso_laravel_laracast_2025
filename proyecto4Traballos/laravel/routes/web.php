<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'jobs');

Route::get('/jobs', [JobController::class, 'index'])
    ->name('jobs.index');
