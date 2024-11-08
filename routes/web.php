<?php

use App\Http\Controllers\JobController;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/about', ('about'));

Route::resource('jobs', JobController::class);

Route::get('/login', fn() => view('auth.login'));
// Show tag
Route::get('/tags/{tag}', fn(Tag $tag) => view('tags.show', ['tag' => $tag]));
