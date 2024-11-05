<?php

use App\Http\Controllers\JobController;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/about', ('about'));

Route::resource('job', JobController::class);

// Show tag
Route::get('/tags/{tag}', fn(Tag $tag) => view('tags.show', ['tag' => $tag]));
