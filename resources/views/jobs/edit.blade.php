<x-layout>
  <x-slot:header>Edit Job {{ $job->id }}</x-slot:header>
  @slot('header')
    Welcome to the Job Edit Page
  @endslot
  <form class="bg-gray-800" method="POST" action="/jobs/{{ $job->id }}">
    @csrf
    @method('PATCH')
    <div class="space-y-12">
      <div class="border-b border-white/10 pb-4">
        <div class="mt-10 grid max-w-lg grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

          <div class="sm:col-span-3">
            <label for="title" class="block text-sm/6 font-medium text-white">Title</label>
            <div class="mt-2">
              <input required type="text" name="title" id="title" placeholder="Acme Company"
                value="{{ $job->title }}"
                class="block w-full rounded-md border-0 bg-white/5 px-3 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm/6">
            </div>
          </div>
          <div class="sm:col-span-3">
            <label for="salary" class="block text-sm/6 font-medium text-white">Salary</label>
            <div class="mt-2">
              <input required type="text" name="salary" id="salary" placeholder="10,000.00"
                value="{{ $job->salary }}"
                class="block w-full rounded-md border-0 bg-white/5 px-3 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm/6">
            </div>
          </div>

        </div>
      </div>
      <div class="mt-2">
        @if ($errors->any())
          <ul>
            @foreach ($errors->all() as $error)
              <li class="italic text-red-500">{{ $error }}</li>
            @endforeach
          </ul>
        @endif
      </div>
    </div>


    <div class="flex flex-row justify-between">
      <div class="flex items-center">
        <button type="submit" form="delete-form"
          class="rounded-md border-2 px-3 py-2 text-sm font-semibold text-red-500 shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500">Delete</button>
      </div>
      <div class="flex items-center justify-end gap-x-6">
        <a href="/jobs/{{ $job->id }}" class="text-sm/6 font-semibold text-white">Cancel</a>
        <button type="submit"
          class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
      </div>
    </div>
  </form>
  <form class="hidden" method="POST" action="/jobs/{{ $job->id }}" id="delete-form">
    @csrf
    @method('DELETE')
  </form>
</x-layout>
