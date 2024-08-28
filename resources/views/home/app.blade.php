<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      @vite('resources/css/app.css')
      <title>@yield('title')</title>
  </head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                {{-- Incluindo o cabeçalho --}}
                @include('partials.header')
            </div>
            <div class="container">
                {{-- Conteúdo específico da página --}}
                @yield('content')
            </div>
        </div>
    </div>

    <footer>
        {{-- Incluindo o rodapé --}}
        @include('partials.footer')
    </footer>
</body>
</html>
