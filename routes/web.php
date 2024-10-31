<?php

use App\Models\Job;
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
