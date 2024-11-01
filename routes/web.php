<?php

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home'));

Route::get('/about', fn() => view('about'));

/*
* Other more performant pagination options for larger datasets:
*  'jobs' => Job::with('employer')->cursorPaginate(5),
*  'jobs' => Job::with('employer')->simplePaginate(5),
*
*  ** Amend display code with `php artisan vendor:publish` ***
*/

Route::get('/jobs', fn() => view('jobs.index', ['jobs' => Job::with('employer')->paginate(5)]));

Route::get('/jobs/create', fn() => view('jobs.create'));

Route::get('/jobs/{id}', fn($id) => view('jobs.show', ['job' => Job::with('tags')->find($id)]));

Route::get('/tags/{id}', fn($id) => view('tags.show', ['tag' => Tag::with('jobs')->find($id)]));
