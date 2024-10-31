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
        'jobs' => Job::all(),
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
