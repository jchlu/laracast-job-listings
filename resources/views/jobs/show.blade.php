<x-layout>
  <x-slot:header>Job Page</x-slot:header>
  <h1>Welcome to the {{ $job['title'] }} Page!</h1>
  @slot('header')
  @endslot
  <div class="divide-y divide-gray-200 overflow-hidden rounded-lg bg-gray-700 shadow">
    <div class="px-4 py-5 sm:px-6">
      {{ $job['title'] }}
      <div class="px-4 py-5 sm:p-6">
        {{ $job['salary'] }}
      </div>
      @foreach ($job['tags'] as $tag)
        <span
          class="inline-flex items-center gap-x-0.5 rounded-md bg-gray-100 px-2 py-1 text-xs font-medium text-gray-600">
          <a href="/tags/{{$tag['id']}}">{{ $tag['name'] }}</a>
          <button type="button" class="group relative -mr-1 h-3.5 w-3.5 rounded-sm hover:bg-gray-500/20">
            <span class="sr-only">Remove</span>
            <svg viewBox="0 0 14 14" class="h-3.5 w-3.5 stroke-gray-700/50 group-hover:stroke-gray-700/75">
              <path d="M4 4l6 6m0-6l-6 6" />
            </svg>
            <span class="absolute -inset-1"></span>
          </button>
        </span>
      @endforeach
    </div>
<div class="flex flex-row justify-end p-4">
    <div class="flex items-center gap-6">
      <a href="/jobs/{{$job->id}}/edit"
        class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Edit</a>
    </div>
</div>
</x-layout>
