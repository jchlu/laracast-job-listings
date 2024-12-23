@props(['name' => 'Acme Co.', 'id' => 0])
<!-- <div class="min-w-0 flex-1">
  <a href="/jobs/{{ $id }}" class="focus:outline-none">
    <p class="text-sm font-medium text-gray-900">{{ $slot }}</p>
    <p class="truncate text-sm text-gray-500">{{ $name }}</p>
  </a>
</div> -->
<div
  class="flex items-center space-x-3 rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:border-gray-400">
  <div class="min-w-0 flex-1">
    <a href="/jobs/{{ $id }}" class="focus:outline-none">
      <p class="text-sm font-medium text-gray-900">{{ $slot }}</p>
      <p class="truncate text-sm text-gray-500">{{ $name }}</p>
    </a>
  </div>
</div>
