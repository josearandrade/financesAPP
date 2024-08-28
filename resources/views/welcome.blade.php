<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      @vite('resources/css/app.css')
    <title>Document</title>
  </head>
  
  <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    @extends('partials.header')

                    <main class="mt-6">
                        <div class="grid grid-rows-3 grid-flow-col gap-4">
                            <div class="row-span-3">
                                <h1 class="text-7xl font-bold text-blue-500">Control your finances. <br> simply and efficiently.</h1>

                            </div>
                            <div class="text-3xl col-span-2">printscreen here.</div>

                        </div>
                    </main>
                    
                    @extends('partials.footer')
                    
                </div>
            </div>
        </div>
    </body>
</html>