<x-layout>
<x-slot:header>Jobs Page</x-slot:header>
<h1>Welcome to the Jobs Page!</h1>
@slot('header')
Job Listings
@endslot
<div class="overflow-hidden rounded-md bg-gray-700 shadow">
    <ul role="list" class="divide-y divide-gray-200">
@foreach ($jobs as $job)
    <a href="/jobs/{{$job['id']}}">
    <div>{{$job->employer->name}}</div>
    <li class="px-6 py-4">
        {{ $job['title']}}
    </li>
    </a>
@endforeach
</ul>
</div>
<div>{{ $jobs->links() }}</div>
</x-layout>
