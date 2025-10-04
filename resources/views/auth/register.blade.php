<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Register - {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Style Kustom -->
    <style>
        .ff-pacifico { font-family: 'Pacifico', cursive; }
        .ff-nunito { font-family: 'Nunito', sans-serif; }
        body {
            background-image: url('https://images.unsplash.com/photo-1559925393-8be0ec4767c8?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="ff-nunito antialiased">
    <div class="min-h-screen flex items-center justify-center p-4 bg-black bg-opacity-50">
        
        <!-- Panel Registrasi Utama -->
        <div class="w-full max-w-4xl flex flex-col md:flex-row bg-white rounded-2xl shadow-2xl overflow-hidden">
            
            <!-- Kolom Gambar (Kiri) -->
            <div class="hidden md:block md:w-1/2">
                <img src="https://images.unsplash.com/photo-1511920183353-3c9c35b572e3?q=80&w=1887&auto=format&fit=crop" alt="Coffee Beans" class="w-full h-full object-cover">
            </div>

            <!-- Kolom Form (Kanan) -->
            <div class="w-full md:w-1/2 bg-slate-800 text-white p-8 md:p-12 flex flex-col justify-center">
                
                <!-- Logo -->
                <div class="text-center mb-8">
                    <a href="{{ url('/') }}" class="inline-flex items-center text-4xl text-orange-400 ff-pacifico">
                        <i class="fa fa-utensils text-orange-400 mr-3"></i>
                        RestoBook
                    </a>
                </div>

                <div class="text-center mb-8">
                    <h2 class="text-2xl font-bold">Create Your Account</h2>
                    <p class="text-slate-400 mt-1">Join us and start your culinary journey</p>
                </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Nama Lengkap -->
                    <div>
                        <label for="name" class="block font-medium text-sm text-slate-300 mb-1">Name</label>
                        <input id="name" class="block mt-1 w-full bg-slate-700 border-slate-600 focus:border-orange-500 focus:ring-orange-500 rounded-md shadow-sm text-white" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Alamat Email -->
                    <div class="mt-4">
                        <label for="email" class="block font-medium text-sm text-slate-300 mb-1">Email address</label>
                        <input id="email" class="block mt-1 w-full bg-slate-700 border-slate-600 focus:border-orange-500 focus:ring-orange-500 rounded-md shadow-sm text-white" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <label for="password" class="block font-medium text-sm text-slate-300 mb-1">Password</label>
                        <input id="password" class="block mt-1 w-full bg-slate-700 border-slate-600 focus:border-orange-500 focus:ring-orange-500 rounded-md shadow-sm text-white"
                                       type="password"
                                       name="password"
                                       required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Konfirmasi Password -->
                    <div class="mt-4">
                        <label for="password_confirmation" class="block font-medium text-sm text-slate-300 mb-1">Confirm Password</label>
                        <input id="password_confirmation" class="block mt-1 w-full bg-slate-700 border-slate-600 focus:border-orange-500 focus:ring-orange-500 rounded-md shadow-sm text-white"
                                       type="password"
                                       name="password_confirmation" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <!-- Tombol Register -->
                    <div class="mt-8">
                        <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-full shadow-sm text-sm font-bold text-slate-800 bg-white hover:bg-slate-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-slate-800 focus:ring-white transition">
                            Register
                        </button>
                    </div>
                    
                    <!-- Link ke Halaman Login -->
                    <div class="mt-8 text-center">
                        <p class="text-sm text-slate-400">
                            Already have an account?
                            <a href="{{ route('login') }}" class="font-medium text-white hover:underline">
                                Sign in
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
