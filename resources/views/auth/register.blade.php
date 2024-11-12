<x-layout>
  <x-slot:header>Login</x-slot:header>
  <div class="flex min-h-full flex-col justify-center bg-my-pink-800 px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <x-logo class="mx-auto !h-16" />
      <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-white">Register a new account</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="/register" method="POST">
        @csrf
        <div>
          <label for="first_name" class="block text-sm/6 font-medium text-white">First Name</label>
          <div class="mt-2">
            <input id="first_name" name="first_name" type="text" required value="{{ old('first_name') }}"
              class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm/6">
          </div>
          @error('first_name')
            <p class="mt-1 bg-my-pink-100 text-xs font-semibold text-red-500">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="last_name" class="block text-sm/6 font-medium text-white">Last Name</label>
          <div class="mt-2">
            <input id="last_name" name="last_name" type="text" required value="{{ old('last_name') }}"
              class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm/6">
          </div>
          @error('last_name')
            <p class="mt-1 bg-my-pink-100 text-xs font-semibold text-red-500">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="email" class="block text-sm/6 font-medium text-white">Email address</label>
          <div class="mt-2">
            <input id="email" name="email" type="email" autocomplete="email" required
              value="{{ old('email') }}"
              class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm/6">
          </div>
          @error('email')
            <p class="mt-1 bg-my-pink-100 text-xs font-semibold text-red-500">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm/6 font-medium text-white">Password</label>
          </div>
          <div class="mt-2">
            <input id="password" name="password" type="password" autocomplete="current-password" required
              class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm/6">
          </div>
          @error('password')
            <p class="mt-1 bg-my-pink-100 text-xs font-semibold text-red-500">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <div class="flex items-center justify-between">
            <label for="password_confirmation" class="block text-sm/6 font-medium text-white">Password
              Confirmation</label>
          </div>
          <div class="mt-2">
            <input id="password_confirmation" name="password_confirmation" type="password"
              autocomplete="current-password" required
              class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm/6">
          </div>
          @error('password_confirmation')
            <p class="mt-1 bg-my-pink-100 text-xs font-semibold text-red-500">{{ $message }}</p>
          @enderror
        </div>
        <div>
          <button type="submit"
            class="flex w-full justify-center rounded-md bg-indigo-500 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Sign
            in</button>
        </div>
      </form>

      <p class="mt-10 text-center text-sm/6 text-gray-400">
        Already a member?
        <a href="/login" class="font-semibold text-indigo-400 hover:text-indigo-300">Login</a>
      </p>
    </div>
  </div>
</x-layout>
