@props(['active' => false, 'button' => false, 'type' => ''])
@if ($button)
  <button type='{{ $type }}'
    class="rounded bg-my-pink-900 px-1 py-2 text-xs font-semibold text-white shadow-sm hover:bg-my-pink-700">
@endif
<a {{ $attributes }}
  class="{{ $active ? 'bg-my-pink-900 text-white' : 'text-my-pink-300 hover:bg-my-pink-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium text-white"
  aria-current="{{ $active ? 'page' : 'false' }}">{{ $slot }}</a>

@if ($button)
  </button>
@endif
