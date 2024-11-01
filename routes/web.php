<?php

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::with('employer')->paginate(5),
        /* Other more performant pagination options for larger datasets:
            'jobs' => Job::with('employer')->cursorPaginate(5),
            'jobs' => Job::with('employer')->simplePaginate(5),
            ** Amend display code with `php artisan vendor:publish` ***
        */
    ]);
});

Route::get('/job/{id}', function ($id) {
    $job = Job::find($id);
    return view('job', ['job' => $job, 'tags' => $job->tags]);
});

Route::get('/tag/{id}', function ($id) {
    $tag = Tag::find($id);
    return view('tag', ['tag' => $tag, 'jobs' => $tag->jobs]);
});
