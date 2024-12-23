<nav x-data='{ open: false, mobileOpen: false }' class="bg-my-pink-800">
  <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="border-b border-my-pink-700">
      <div class="flex h-16 items-center justify-between px-4 sm:px-0">
        <div class="flex items-center">
          <div class="shrink-0">
            <x-logo />
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-my-pink-900 text-white", Default: "text-my-pink-300 hover:bg-my-pink-700 hover:text-white" -->
              <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
              <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
              <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
            @guest
              <x-nav-link href="/login">Login</x-nav-link>
            @endguest
            @auth
              <form action="/logout" method="POST">
                @csrf
                <x-nav-link button=true type='submit'>Logout</x-nav-link>
              </form>
            @endauth
            <button type="button"
              class="relative rounded-full bg-my-pink-800 p-1 text-my-pink-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-my-pink-800">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">View notifications</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
              </svg>
            </button>

            <!-- Profile dropdown -->
            <div class="relative ml-3">
              <div>
                <button type="button"
                  class="relative flex max-w-xs items-center rounded-full bg-my-pink-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-my-pink-800"
                  id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">Open user menu</span>
                  <img class="h-8 w-8 rounded-full"
                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                    alt="">
                </button>
              </div>

              <!--
                    Dropdown menu, show/hide based on menu state.

                    Entering: "transition ease-out duration-100"
                      From: "transform opacity-0 scale-95"
                      To: "transform opacity-100 scale-100"
                    Leaving: "transition ease-in duration-75"
                      From: "transform opacity-100 scale-100"
                      To: "transform opacity-0 scale-95"
                  -->
              <div x-show="open"
                class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <!-- Active: "bg-my-pink-100 outline-none", Not Active: "" -->
                <a href="#" class="block px-4 py-2 text-sm text-my-pink-700" role="menuitem" tabindex="-1"
                  id="user-menu-item-0">Your Profile</a>
                <a href="#" class="block px-4 py-2 text-sm text-my-pink-700" role="menuitem" tabindex="-1"
                  id="user-menu-item-1">Settings</a>
                <a href="#" class="block px-4 py-2 text-sm text-my-pink-700" role="menuitem" tabindex="-1"
                  id="user-menu-item-2">Sign out</a>
              </div>
            </div>
          </div>
        </div>
        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button type="button" @click="mobileOpen = !mobileOpen"
            class="relative inline-flex items-center justify-center rounded-md bg-my-pink-800 p-2 text-my-pink-400 hover:bg-my-pink-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-my-pink-800"
            aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <svg x-show="!mobileOpen" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg x-show="mobileOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  <div x-show="mobileOpen" class="border-b border-my-pink-700 md:hidden" id="mobile-menu">
    <div class="space-y-1 px-2 py-3 sm:px-3">
      <x-nav-link href="/login">Login</x-nav-link>
      <!-- Current: "bg-my-pink-900 text-white", Default: "text-my-pink-300 hover:bg-my-pink-700 hover:text-white" -->
      <a href="#" class="block rounded-md bg-my-pink-900 px-3 py-2 text-base font-medium text-white"
        aria-current="page">{{ $slot }}</a>
      <a href="#"
        class="block rounded-md px-3 py-2 text-base font-medium text-my-pink-300 hover:bg-my-pink-700 hover:text-white">Team</a>
      <a href="#"
        class="block rounded-md px-3 py-2 text-base font-medium text-my-pink-300 hover:bg-my-pink-700 hover:text-white">Projects</a>
      <a href="#"
        class="block rounded-md px-3 py-2 text-base font-medium text-my-pink-300 hover:bg-my-pink-700 hover:text-white">Calendar</a>
      <a href="#"
        class="block rounded-md px-3 py-2 text-base font-medium text-my-pink-300 hover:bg-my-pink-700 hover:text-white">Reports</a>
    </div>
    <div class="border-t border-my-pink-700 pb-3 pt-4">
      <div class="flex items-center px-5">
        <div class="shrink-0">
          <img class="h-10 w-10 rounded-full"
            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
            alt="">
        </div>
        <div class="ml-3">
          <div class="text-base/5 font-medium text-white">Tom Cook</div>
          <div class="text-sm font-medium text-my-pink-400">tom@example.com</div>
        </div>
        <button type="button"
          class="relative ml-auto shrink-0 rounded-full bg-my-pink-800 p-1 text-my-pink-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-my-pink-800">
          <span class="absolute -inset-1.5"></span>
          <span class="sr-only">View notifications</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
          </svg>
        </button>
      </div>
      <div class="mt-3 space-y-1 px-2">
        <a href="#"
          class="block rounded-md px-3 py-2 text-base font-medium text-my-pink-400 hover:bg-my-pink-700 hover:text-white">Your
          Profile</a>
        <a href="#"
          class="block rounded-md px-3 py-2 text-base font-medium text-my-pink-400 hover:bg-my-pink-700 hover:text-white">Settings</a>
        <a href="#"
          class="block rounded-md px-3 py-2 text-base font-medium text-my-pink-400 hover:bg-my-pink-700 hover:text-white">Sign
          out</a>
      </div>
    </div>
  </div>
</nav>
