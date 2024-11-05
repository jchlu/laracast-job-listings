<?php

use App\Http\Controllers\JobController;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/about', ('about'));

Route::controller(JobController::class)->group(function () {
  Route::post('/jobs', 'store');
  Route::patch('/jobs/{job}', 'update');
  Route::get('/jobs/create', 'create');
  Route::get(('/jobs/{job}'), 'show');
  Route::get('/jobs/{id}/edit', 'edit');
  Route::delete('/jobs/{job}', 'destroy');
  Route::get('/jobs', 'index');
});

// Show tag
Route::get('/tags/{tag}', fn(Tag $tag) => view('tags.show', ['tag' => $tag]));
