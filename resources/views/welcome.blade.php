<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RestoBook - Reservasi Meja Mudah</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200">
    <div class="min-h-screen flex flex-col">
        <!-- Navigation -->
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <div class="shrink-0 flex items-center">
                            <a href="{{ url('/') }}" class="text-2xl font-bold text-indigo-600 dark:text-indigo-400">
                                RestoBook
                            </a>
                        </div>
                    </div>
                    <div class="flex items-center">
                        @if (Route::has('login'))
                            <nav class="flex flex-1 justify-end items-center gap-4">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Dashboard
                                    </a>
                                @else
                                    <a href="{{ route('login') }}" class="rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Log in
                                    </a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:hover:text-white/80 dark:focus-visible:ring-white">
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </div>
                </div>
            </div>
        </header>

        <!-- Hero Section -->
        <main class="flex-grow">
            <div class="relative isolate overflow-hidden bg-white dark:bg-gray-800">
                <div class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-32 lg:flex lg:px-8 lg:py-40">
                    <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl lg:flex-shrink-0 lg:pt-8">
                        <h1 class="mt-10 text-4xl font-bold tracking-tight sm:text-6xl">Nikmati Momen Spesial Anda Bersama Kami</h1>
                        <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-300">Reservasi meja favorit Anda dengan mudah dan cepat. Hindari antrian dan pastikan tempat Anda tersedia. Rencanakan makan malam romantis atau pertemuan keluarga tanpa repot.</p>
                        <div class="mt-10 flex items-center gap-x-6">
                            <a href="{{ route('reservations.create') }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Reservasi Sekarang</a>
                            <a href="{{ route('menus.index') }}" class="text-sm font-semibold leading-6">Lihat Menu <span aria-hidden="true">→</span></a>
                        </div>
                    </div>
                    <div class="mx-auto mt-16 flex max-w-2xl sm:mt-24 lg:ml-10 lg:mt-0 lg:mr-0 lg:max-w-none lg:flex-none xl:ml-32">
                        <div class="max-w-3xl flex-none sm:max-w-5xl lg:max-w-none">
                            <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?q=80&w=1974&auto=format&fit=crop" alt="App screenshot" width="2432" height="1442" class="w-[76rem] rounded-md bg-white/5 shadow-2xl ring-1 ring-white/10">
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-center text-gray-500 dark:text-gray-400">
                © {{ date('Y') }} RestoBook. All rights reserved.
            </div>
        </footer>
    </div>
</body>
</html>

