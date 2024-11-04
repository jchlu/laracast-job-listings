<?php

use App\Http\Controllers\JobController;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/about', ('about'));

// Create job
Route::post('/jobs', [JobController::class, 'store']);

// Update job
Route::patch('/jobs/{job}', [JobController::class, 'update']);

// Create job
Route::get('/jobs/create', [JobController::class, 'create']);

// Show job
Route::get(('/jobs/{job}'), [JobController::class, 'show']);

// Edit job
Route::get('/jobs/{id}/edit', [JobController::class, 'edit']);

// Destroy job
Route::delete('/jobs/{job}', [JobController::class, 'destroy']);

// Show all jobs
Route::get('/jobs', [JobController::class, 'index']);

// Show tag
Route::get('/tags/{tag}', fn(Tag $tag) => view('tags.show', ['tag' => $tag]));
