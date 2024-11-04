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

// Create job
Route::post('/jobs', function () {
    // create a job from the request data AFTER VALIDATION
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => fake()->numberBetween(1, 20)
    ]);
    return redirect('/jobs');
});

// Update job
Route::patch('/jobs/{id}', function () {
    //TODO: Auth
    // create a job from the request data AFTER VALIDATION
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    Job::findOrFail(request('id'))->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);
    return redirect('/jobs/' . request('id'));
});

// Show create
Route::get('/jobs/create', fn() => view('jobs.create'));

// Show job
Route::get(('/jobs/{job}'), fn(Job $job) => view('jobs.show', ['job' => $job]));

// Edit job
Route::get('/jobs/{id}/edit', fn($id) => view('jobs.edit', ['job' => Job::findOrFail($id)]));

// Delete job
Route::delete('/jobs/{id}', function () {
    // TODO:Auth
    Job::findOrFail(request('id'))->delete();
    return redirect('/jobs');
});

// Show all jobs
Route::get('/jobs', fn() => view('jobs.index', ['jobs' => Job::with('employer')->latest()->paginate(5)]));

// Show tag
Route::get('/tags/{tag}', fn(Tag $tag) => view('tags.show', ['tag' => $tag]));
