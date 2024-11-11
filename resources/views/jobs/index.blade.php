<x-layout>
  <x-slot:header>Jobs Page</x-slot:header>
  <h1>Welcome to the Jobs Page!</h1>
  @slot('header')
    Job Listings
  @endslot
  <div class="mt-6">
    <div class="grid grid-cols-1 gap-8 bg-my-pink-400 p-8 sm:grid-cols-2">
      @foreach ($jobs as $job)
        <x-jobs.card name='{{ $job->employer->name }}' id='{{ $job->id }}'>{{ $job->title }}</x-jobs.card>
      @endforeach
    </div>
  </div>
</x-layout>
