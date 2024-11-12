<!doctype html>
<html lang="en" class="bg-my-pink-100 h-full">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full">
  <div class="min-h-full">
    <div class="bg-my-pink-800 pb-32">
      <x-nav-bar>{{ $header }}</x-nav-bar>
      <x-page-header>{{ $header }}</x-page-header>
    </div>
    <main class="-mt-32">
      <div class="mx-auto max-w-7xl px-4 pb-12 sm:px-6 lg:px-8">
        <div class="bg-my-pink-100 rounded-lg px-5 py-6 shadow sm:px-6">
          {{ $slot }}
        </div>
      </div>
    </main>
  </div>
</body>

</html>
