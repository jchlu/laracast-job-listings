<x-layout>
<x-slot:header>Jobs Page</x-slot:header>
<h1>Welcome to the Jobs Page!</h1>
@slot('header')
@endslot
<div class="overflow-hidden rounded-md bg-white shadow">
    <ul role="list" class="divide-y divide-gray-200">
@foreach ($jobs as $job)
    <a href="/job/{{$job['id']}}">
    <div>{{$job->employer->name}}</div>
    <li class="px-6 py-4">
        {{ $job['title']}}
    </li>
    </a>
@endforeach
</ul>
</div>
</x-layout>
