<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        /*
            * Other more performant pagination options for larger datasets:
            *  'jobs' => Job::with('employer')->cursorPaginate(5),
            *  'jobs' => Job::with('employer')->simplePaginate(5),
            *
            *  ** Amend display code with `php artisan vendor:publish` ***
        */

        return view('jobs.index', ['jobs' => Job::with('employer')->latest()->paginate(5)]);
    }

    // Create job
    public function create()
    {
        return view('jobs.create');
    }

    // Persist job
    public function store()
    {
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
    }

    // Show job
    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    // Edit job
    public function edit($id)
    {
        return view('jobs.edit', ['job' => Job::findOrFail($id)]);
    }

    //Update job
    public function update(Job $job)
    {
        //TODO: Auth
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        // create a job from the request data AFTER VALIDATION
        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);
        return redirect('/jobs/' . $job->id);
    }

    // Destroy job
    public function destroy(Job $job)
    {
        // TODO:Auth
        $job->delete();
        return redirect('/jobs');
    }
}
