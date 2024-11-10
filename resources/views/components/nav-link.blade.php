@props(['active' => false, 'type' => 'link'])
@if ($type == 'button')
  <button type="button"
    class="rounded bg-indigo-500 px-2 py-1 text-xs font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
@endif
<a {{ $attributes }}
  class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}
rounded-md px-3 py-2 text-sm font-medium text-white"
  aria-current="{{ $active ? 'page' : 'false' }}">{{ $slot }}</a>

@if ($type == 'button')
  </button>
@endif
