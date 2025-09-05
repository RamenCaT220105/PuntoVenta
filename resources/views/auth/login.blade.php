<x-layouts.guest title="Login">
  <div class="relative w-full max-w-[760px] px-4">

    {{-- Dock flotante (izquierda) --}}
    <div class="hidden md:block">
      <div
        class="fixed left-6 top-1/2 -translate-y-1/2 select-none rounded-2xl bg-white shadow-xl ring-1 ring-slate-200/70"
        style="width:56px;height:auto"
      >
        <div class="p-3 grid gap-4 place-items-center">
          {{-- teclado --}}
          <div class="grid h-8 w-8 place-items-center rounded-lg bg-slate-50 text-slate-700 shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
              <path d="M3 5a2 2 0 00-2 2v8a2 2 0 002 2h18a2 2 0 002-2V7a2 2 0 00-2-2H3zm2 3h2v2H5V8zm3 0h2v2H8V8zm3 0h2v2h-2V8zm3 0h2v2h-2V8zM5 11h2v2H5v-2zm3 0h2v2H8v-2zm3 0h2v2h-2v-2zm3 0h2v2h-2v-2zM5 14h14v2H5v-2z"/>
            </svg>
          </div>
          {{-- emoji --}}
          <div class="grid h-8 w-8 place-items-center rounded-lg bg-slate-50 text-slate-700 shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 2a10 10 0 1010 10A10.011 10.011 0 0012 2zm-3 7a1.5 1.5 0 11-1.5 1.5A1.5 1.5 0 019 9zm9 3a6 6 0 11-12 0zM16.5 10.5A1.5 1.5 0 1118 9a1.5 1.5 0 01-1.5 1.5z"/>
            </svg>
          </div>
          {{-- menú --}}
          <div class="grid h-8 w-8 place-items-center rounded-lg bg-slate-50 text-slate-700 shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
              <path d="M3 6h18v2H3zM3 11h18v2H3zM3 16h18v2H3z"/>
            </svg>
          </div>
        </div>
      </div>
    </div>

    {{-- Tarjeta flotante centrada --}}
    <div
      class="mx-auto w-full max-w-xl rounded-[22px] bg-slate-100/90 shadow-[0_24px_60px_-20px_rgba(2,6,23,0.25)] ring-1 ring-slate-200"
    >
      {{-- Header de la tarjeta --}}
      <div class="flex items-center justify-center gap-3 px-8 pt-8 pb-2">
        <h1 class="text-lg font-semibold tracking-wide text-slate-800">BIENVENIDO</h1>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-600" viewBox="0 0 24 24" fill="currentColor">
          <path d="M12 8a4 4 0 104 4 4 4 0 00-4-4zm7-2h-1.26a8 8 0 00-1.45-2.49l.9-.9A1 1 0 0016.74.2L15.84 1.1A8 8 0 0012 0V1a7 7 0 017 7zM8.27 1.1L7.37.2A1 1 0 105.8 1.61l.9.9A8 8 0 005.26 5H4a1 1 0 000 2h1.26a7 7 0 011.45 2.49l-.9.9A1 1 0 006.63 12l.9-.9A8 8 0 0011 13v1a1 1 0 002 0v-1a8 8 0 003.1-.9l.9.9a1 1 0 001.41-1.41l-.9-.9A7 7 0 0020 7h1a1 1 0 000-2h-1.26a8 8 0 00-1.45-2.49l.9-.9A1 1 0 0018.2.2l-.9.9A8 8 0 0013 1V0a1 1 0 00-2 0v1a8 8 0 00-2.73.1z"/>
        </svg>
      </div>

      {{-- Formulario --}}
      <form action="{{ route('login.post') }}" method="POST" class="px-8 pb-8 pt-4 space-y-4">
        @csrf

        {{-- Usuario --}}
        <div>
          <label class="mb-1 block text-xs font-medium text-slate-600">Nombre</label>
          <input
            name="salesperid"
            value="{{ old('salesperid') }}"
            required
            class="w-full rounded-lg border border-slate-200 bg-white px-4 py-3 text-sm outline-none placeholder:text-slate-400 focus:border-slate-300 focus:ring-0"
            placeholder="Ej. 02"
          >
          @error('salesperid')
            <p class="mt-1 text-xs text-rose-600">{{ $message }}</p>
          @enderror
        </div>

        {{-- Contraseña --}}
        <div>
          <label class="mb-1 block text-xs font-medium text-slate-600">Contraseña</label>
          <input
            type="password"
            name="password"
            required
            class="w-full rounded-lg border border-slate-200 bg-white px-4 py-3 text-sm outline-none placeholder:text-slate-400 focus:border-slate-300 focus:ring-0"
            placeholder="••••••"
          >
          @error('password')
            <p class="mt-1 text-xs text-rose-600">{{ $message }}</p>
          @enderror
        </div>

        {{-- Botón (azul marino) --}}
        <button
          type="submit"
          class="w-full rounded-lg bg-[#0F3551] py-3 text-sm font-semibold text-white shadow hover:bg-[#0b2a40] focus:outline-none focus:ring-4 focus:ring-slate-300"
        >
          Iniciar sesión
        </button>

        <p class="pt-1 text-center text-xs text-slate-500">
          ¿Problemas para iniciar? Contacta al administrador de caja.
        </p>
      </form>
    </div>
  </div>
</x-layouts.guest>
