<x-layouts.app title="Dashboard">
  <x-slot:header>
    <h1 class="text-xl font-semibold">Dashboard</h1>
  </x-slot:header>

  <div class="grid gap-6 md:grid-cols-2">
    <div class="p-6 bg-white rounded-xl shadow">Contenido…</div>
    <div class="p-6 bg-white rounded-xl shadow">Contenido…</div>
  </div>

  @auth
  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button class="text-sm text-indigo-600 hover:underline">Salir</button>
  </form>
  @endauth

</x-layouts.app>
