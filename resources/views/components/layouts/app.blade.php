<!doctype html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title ?? config('app.name') }}</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="min-h-screen bg-gray-50 text-gray-800">
  <div class="min-h-screen flex">
    {{-- Sidebar --}}
    <aside class="w-64 bg-white border-r hidden md:block">
      <div class="p-4 font-semibold">POS</div>
      {{ $sidebar ?? '' }}
    </aside>

    {{-- Main --}}
    <div class="flex-1 flex flex-col">
      <header class="bg-white border-b">
        <div class="max-w-7xl mx-auto px-4 py-3">
          {{ $header ?? '' }}
        </div>
      </header>

      <main class="max-w-7xl mx-auto px-4 py-6">
        {{ $slot }}
      </main>
    </div>
  </div>
</body>
</html>
