<x-layout>
  <x-slot:header>Tag Page</x-slot:header>
  <h1>Welcome to the {{ $tag['name'] }} Page!</h1>
  @slot('header')
  @endslot
  <div class="divide-y divide-my-pink-200 overflow-hidden rounded-lg bg-my-pink-700 shadow">
    <div class="px-4 py-5 sm:px-6">
      {{ $tag['name'] }}
      <div class="px-4 py-5 sm:p-6">
        Jobs with the <strong>{{ $tag['name'] }}</strong> tag:
      </div>
      @foreach ($tag['jobs'] as $job)
        <span
          class="inline-flex items-center gap-x-0.5 rounded-md bg-my-pink-100 px-2 py-1 text-xs font-medium text-my-pink-600">
          <a href="/jobs/{{ $job['id'] }}">{{ $job['title'] }}</a>
          <button type="button" class="group relative -mr-1 h-3.5 w-3.5 rounded-sm hover:bg-my-pink-500/20">
            <span class="sr-only">Remove</span>
            <svg viewBox="0 0 14 14" class="h-3.5 w-3.5 stroke-my-pink-700/50 group-hover:stroke-my-pink-700/75">
              <path d="M4 4l6 6m0-6l-6 6" />
            </svg>
            <span class="absolute -inset-1"></span>
          </button>
        </span>
      @endforeach
    </div>
</x-layout>
