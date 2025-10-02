{{-- Mengabaikan layout utama (app.blade.php) untuk tampilan custom --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard - {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .ff-pacifico { font-family: 'Pacifico', cursive; }
        .ff-nunito { font-family: 'Nunito', sans-serif; }
    </style>
</head>
<body class="ff-nunito antialiased">
    <div class="min-h-screen flex bg-gray-100">
        <!-- Kolom Gambar (Kiri) - Hanya tampil di layar medium ke atas -->
        <div class="hidden md:block w-1/2 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1555396273-367ea4eb4db5?q=80&w=1974&auto=format&fit=crop');">
            <div class="w-full h-full bg-black bg-opacity-50"></div>
        </div>

        <!-- Kolom Konten (Kanan) -->
        <div class="w-full md:w-1/2 flex items-center justify-center p-8 md:p-12">
            <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8">
                
                <!-- Logo dan Nama Restoran -->
                <div class="text-center mb-8">
                    <a href="{{ url('/') }}" class="inline-flex items-center text-4xl text-orange-500 ff-pacifico">
                        <i class="fa fa-utensils text-orange-500 mr-3"></i>
                        Restoran
                    </a>
                </div>

                <!-- Salam Sambutan -->
                <div class="text-center">
                    <h2 class="text-2xl font-bold text-gray-800">Selamat Datang Kembali,</h2>
                    {{-- Mengambil nama pengguna yang sedang login --}}
                    <h1 class="text-3xl font-extrabold text-orange-500 mt-1">{{ Auth::user()->name }}!</h1>
                    <p class="text-gray-500 mt-2">Ini adalah ringkasan aktivitas Anda.</p>
                </div>
                
                <!-- Kartu Statistik -->
                <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-4 text-center">
                    @php
                        // Data ini idealnya datang dari Controller Anda
                        $stats = [
                            ['icon' => 'fa-calendar-check', 'value' => 5, 'label' => 'Total Reservasi'],
                            ['icon' => 'fa-bell', 'value' => 2, 'label' => 'Reservasi Akan Datang'],
                        ];
                    @endphp

                    @foreach ($stats as $stat)
                    <div class="bg-orange-50 rounded-lg p-4">
                        <i class="fa {{ $stat['icon'] }} text-orange-500 text-3xl"></i>
                        <p class="text-2xl font-bold text-gray-800 mt-2">{{ $stat['value'] }}</p>
                        <p class="text-sm text-gray-600">{{ $stat['label'] }}</p>
                    </div>
                    @endforeach
                </div>

                <!-- Tombol Aksi Cepat -->
                <div class="mt-8">
                    <a href="{{ route('reservations.create') }}" class="block w-full text-center bg-orange-500 text-white font-bold py-3 px-4 rounded-lg hover:bg-orange-600 transition duration-300">
                        Buat Reservasi Baru
                    </a>
                </div>
                
                <!-- Link Logout -->
                <div class="mt-6 text-center">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); this.closest('form').submit();"
                                class="text-sm text-gray-500 hover:text-gray-800 hover:underline">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
