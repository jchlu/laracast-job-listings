<x-layout>
<x-slot:header>Job Page</x-slot:header>
<h1>Welcome to the {{$job['title']}} Page!</h1>
@slot('header')
@endslot
<div class="divide-y divide-gray-200 overflow-hidden rounded-lg bg-white shadow">
  <div class="px-4 py-5 sm:px-6">
    {{$job['title']}}
  <div class="px-4 py-5 sm:p-6">
    {{$job['salary']}}
  </div>
</div>
</x-layout>
