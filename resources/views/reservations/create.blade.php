    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Buat Reservasi - RestoBook</title>

        <!-- Fonts & Icons -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800&family=Pacifico&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <!-- Vite/Tailwind CSS -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            .ff-pacifico { font-family: 'Pacifico', cursive; }
            .ff-nunito { font-family: 'Nunito', sans-serif; }
             body {
                background-color: #0F172A; /* bg-slate-900 */
            }
        </style>
    </head>
    <body class="ff-nunito antialiased text-white">
        <div class="container mx-auto px-4 py-12">
            <div class="max-w-2xl mx-auto bg-slate-800 rounded-2xl shadow-xl p-8 md:p-12">
                
                <!-- Header Form -->
                <div class="text-center mb-8">
                    <a href="{{ url('/') }}" class="inline-flex items-center text-4xl text-orange-400 ff-pacifico mb-4">
                        <i class="fa fa-utensils text-orange-400 mr-3"></i>
                        RestoBook
                    </a>
                    <h1 class="text-3xl font-bold mt-2">Book a Table Online</h1>
                    <p class="text-slate-400 mt-2">Isi detail di bawah ini untuk mengamankan meja Anda.</p>
                </div>

                <form action="{{ route('reservations.store') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Nama -->
                        <div>
                            <label for="name" class="block font-medium text-sm text-slate-300 mb-1">Nama Lengkap</label>
                            <input type="text" id="name" name="name" class="block w-full bg-slate-700 border-slate-600 focus:border-orange-500 focus:ring-orange-500 rounded-md shadow-sm text-white" required>
                        </div>
                        
                        <!-- Email -->
                        <div>
                            <label for="email" class="block font-medium text-sm text-slate-300 mb-1">Email</label>
                            <input type="email" id="email" name="email" class="block w-full bg-slate-700 border-slate-600 focus:border-orange-500 focus:ring-orange-500 rounded-md shadow-sm text-white" required>
                        </div>

                        <!-- Nomor Telepon -->
                        <div>
                            <label for="phone" class="block font-medium text-sm text-slate-300 mb-1">Nomor Telepon</label>
                            <input type="tel" id="phone" name="phone" class="block w-full bg-slate-700 border-slate-600 focus:border-orange-500 focus:ring-orange-500 rounded-md shadow-sm text-white" required>
                        </div>

                        <!-- Jumlah Tamu -->
                        <div>
                            <label for="guest_number" class="block font-medium text-sm text-slate-300 mb-1">Jumlah Tamu</label>
                            <input type="number" id="guest_number" name="guest_number" min="1" class="block w-full bg-slate-700 border-slate-600 focus:border-orange-500 focus:ring-orange-500 rounded-md shadow-sm text-white" required>
                        </div>

                        <!-- Tanggal Reservasi -->
                        <div class="md:col-span-2">
                             <label for="reservation_date" class="block font-medium text-sm text-slate-300 mb-1">Tanggal & Waktu</label>
                             <input type="datetime-local" id="reservation_date" name="reservation_date" class="block w-full bg-slate-700 border-slate-600 focus:border-orange-500 focus:ring-orange-500 rounded-md shadow-sm text-white" required>
                        </div>
                        
                        <!-- Pesan Khusus -->
                        <div class="md:col-span-2">
                            <label for="message" class="block font-medium text-sm text-slate-300 mb-1">Pesan Khusus (Opsional)</label>
                            <textarea id="message" name="message" rows="4" class="block w-full bg-slate-700 border-slate-600 focus:border-orange-500 focus:ring-orange-500 rounded-md shadow-sm text-white"></textarea>
                        </div>
                    </div>

                    <!-- Tombol Submit -->
                    <div class="mt-8">
                        <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-bold text-white bg-orange-500 hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-slate-800 focus:ring-orange-500 transition">
                            Book Now
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </body>
    </html>
    
