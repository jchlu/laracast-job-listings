<button
  {{ $attributes->merge(['type' => 'submit', 'class' => 'rounded-md bg-my-pink-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-my-pink-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-my-pink-600']) }}>{{ $slot }}</button>
