<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restoran - Enjoy Your Meal</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- AOS (Animate On Scroll) Library CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Vite/Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Style Kustom -->
    <style>
        html {
            scroll-behavior: smooth;
        }
        .hero-bg {
            background: linear-gradient(rgba(15, 23, 42, .9), rgba(15, 23, 42, .9)), url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=2070&auto=format&fit=crop');
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .ff-pacifico {
            font-family: 'Pacifico', cursive;
        }
        .ff-nunito {
            font-family: 'Nunito', sans-serif;
        }
        .section-title::before {
            position: absolute;
            content: "";
            width: 45px;
            height: 2px;
            top: 50%;
            left: -55px;
            margin-top: -1px;
            background: #FEA116;
        }
        .section-title::after {
            position: absolute;
            content: "";
            width: 45px;
            height: 2px;
            top: 50%;
            right: -55px;
            margin-top: -1px;
            background: #FEA116;
        }
        .active-tab {
            color: #FEA116;
            border-bottom: 2px solid #FEA116;
        }
    </style>
</head>
<body class="bg-white dark:bg-gray-900 ff-nunito">
    <div class="min-h-screen bg-gray-900 text-white flex flex-col">
        
        <!-- Bagian Navigasi -->
        <header class="bg-gray-900 shadow-md sticky top-0 z-50">
            <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-20">
                    <!-- Logo -->
                    <a href="{{ url('/') }}" class="flex items-center text-3xl text-orange-400 ff-pacifico">
                        <i class="fa fa-utensils text-orange-400 mr-3"></i>
                        Restoran
                    </a>
                    
                    <!-- Menu untuk Desktop -->
                    <div class="hidden md:flex items-center space-x-1">
                        <a href="#" class="px-3 py-2 rounded-md text-sm font-medium text-white bg-orange-500">HOME</a>
                        <a href="#about" class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-orange-400 transition">ABOUT</a>
                        <a href="#service" class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-orange-400 transition">SERVICE</a>
                        <a href="#menu" class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-orange-400 transition">MENU</a>
                        <a href="#" class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-orange-400 transition">PAGES</a>
                        <a href="#contact" class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-orange-400 transition">CONTACT</a>
                    </div>

                    <!-- Tombol "Book a Table" -->
                    <div class="hidden md:block">
                         <a href="{{ route('reservations.create') }}" class="rounded-md bg-orange-500 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-orange-600 transition">BOOK A TABLE</a>
                    </div>

                    <!-- Tombol Menu untuk Mobile -->
                    <div class="md:hidden">
                        <button class="text-gray-300 hover:text-white focus:outline-none">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Bagian Hero (Tampilan Utama) -->
        <main class="flex-grow">
            <div class="hero-bg flex items-center justify-center">
                <div class="max-w-7xl mx-auto px-6 lg:px-8 py-32 sm:py-48 lg:py-56">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                        <div class="text-center lg:text-left" data-aos="fade-right">
                            <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl leading-tight ff-nunito">Enjoy Our <br> Delicious Meal</h1>
                            <p class="mt-6 text-lg leading-8 text-gray-300">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet.</p>
                            <div class="mt-10">
                                <a href="{{ route('reservations.create') }}" class="rounded-md bg-orange-500 px-8 py-4 text-base font-semibold text-white shadow-sm hover:bg-orange-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-500 transition">BOOK A TABLE</a>
                            </div>
                        </div>
                        <div class="flex justify-center" data-aos="zoom-in" data-aos-delay="200">
                            <img src="https://images.unsplash.com/photo-1540189549336-e6e99c3679fe?q=80&w=1887&auto=format=fit=crop" alt="Delicious Food" class="rounded-full w-96 h-96 object-cover border-8 border-orange-400/50 shadow-2xl">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bagian Service (Layanan) -->
            @php
                // Data ini seharusnya datang dari Controller
                $services = [
                    ['icon' => 'fa-user-tie', 'title' => 'Master Chefs', 'description' => 'Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam'],
                    ['icon' => 'fa-utensils', 'title' => 'Quality Food', 'description' => 'Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam'],
                    ['icon' => 'fa-cart-plus', 'title' => 'Online Order', 'description' => 'Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam'],
                    ['icon' => 'fa-headset', 'title' => '24/7 Service', 'description' => 'Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam'],
                ];
            @endphp
            <div id="service" class="bg-white text-gray-800 py-24 sm:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                        @foreach ($services as $service)
                        <div class="bg-gray-50 shadow-lg rounded-lg p-6 text-center hover:bg-orange-500 hover:text-white transition duration-300 group" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                            <i class="fa fa-3x {{ $service['icon'] }} text-orange-500 mb-4 group-hover:text-white"></i>
                            <h5 class="text-xl font-semibold mb-2">{{ $service['title'] }}</h5>
                            <p class="text-gray-500 group-hover:text-white">{{ $service['description'] }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Bagian About (Tentang Kami) -->
            <div id="about" class="bg-white text-gray-800 py-24 sm:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                        <div class="grid grid-cols-2 gap-4" data-aos="zoom-in">
                            <img class="w-full rounded-md" src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5" alt="Interior Restoran 1">
                            <img class="w-full rounded-md mt-8" src="https://images.unsplash.com/photo-1559339352-11d035aa65de" alt="Interior Restoran 2">
                            <img class="w-full rounded-md" src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4" alt="Interior Restoran 3">
                            <img class="w-full rounded-md" src="https://images.unsplash.com/photo-1552566626-52f8b828add9" alt="Suasana Restoran">
                        </div>
                        <div data-aos="fade-left" data-aos-delay="200">
                            <h5 class="ff-pacifico text-orange-500 text-2xl">About Us</h5>
                            <h1 class="text-4xl font-bold mt-2 mb-4">Welcome to <i class="fa fa-utensils text-orange-500 mr-2"></i>Restoran</h1>
                            <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit, sed stet lorem sit.</p>
                            <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                            <div class="flex items-center mt-6">
                                <div class="border-l-4 border-orange-500 pl-4">
                                    <h1 class="text-4xl font-bold text-orange-500">15</h1>
                                    <p>Years of <strong class="block">EXPERIENCE</strong></p>
                                </div>
                                <div class="border-l-4 border-orange-500 pl-4 ml-8">
                                    <h1 class="text-4xl font-bold text-orange-500">50</h1>
                                    <p>Popular <strong class="block">MASTER CHEFS</strong></p>
                                </div>
                            </div>
                            <a href="" class="inline-block mt-8 bg-orange-500 text-white font-semibold py-3 px-8 rounded-md hover:bg-orange-600 transition">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bagian Menu -->
            @php
                // Data ini seharusnya datang dari Controller Anda
                $menuItems = [
                    'breakfast' => [
                        ['image' => 'https://via.placeholder.com/80', 'name' => 'Nasi Goreng Spesial', 'price' => '45', 'description' => 'Nasi goreng dengan telur, ayam, dan udang.'],
                        ['image' => 'https://via.placeholder.com/80', 'name' => 'Bubur Ayam', 'price' => '25', 'description' => 'Bubur ayam lengkap dengan suwiran ayam dan cakwe.'],
                        ['image' => 'https://via.placeholder.com/80', 'name' => 'Lontong Sayur', 'price' => '30', 'description' => 'Lontong dengan kuah sayur santan yang gurih.'],
                        ['image' => 'https://via.placeholder.com/80', 'name' => 'Soto Ayam', 'price' => '35', 'description' => 'Soto ayam bening dengan bihun dan tauge.'],
                    ],
                    'launch' => [
                        ['image' => 'https://via.placeholder.com/80', 'name' => 'Ayam Bakar Madu', 'price' => '55', 'description' => 'Ayam bakar dengan bumbu madu spesial.'],
                        ['image' => 'https://via.placeholder.com/80', 'name' => 'Ikan Gurame Asam Manis', 'price' => '75', 'description' => 'Ikan gurame goreng dengan saus asam manis.'],
                    ],
                    'dinner' => [
                        ['image' => 'https://via.placeholder.com/80', 'name' => 'Sate Kambing', 'price' => '65', 'description' => 'Sate kambing muda dengan bumbu kecap pedas.'],
                        ['image' => 'https://via.placeholder.com/80', 'name' => 'Tongseng Sapi', 'price' => '70', 'description' => 'Tongseng daging sapi dengan kuah kaya rempah.'],
                    ]
                ];
            @endphp
            <div id="menu" class="bg-white text-gray-800 py-24 sm:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8 text-center" data-aos="fade-up">
                    <h5 class="ff-pacifico text-orange-500 text-2xl relative inline-block section-title">Food Menu</h5>
                    <h1 class="text-4xl font-bold mt-2 mb-12">Most Popular Items</h1>
                    <div class="flex justify-center mb-8 space-x-8" id="menu-tabs">
                        <button data-tab="breakfast" class="menu-tab active-tab flex items-center space-x-2 pb-2">
                            <i class="fa fa-coffee fa-2x"></i>
                            <div>
                                <small class="block">Popular</small>
                                <h6 class="font-bold">Breakfast</h6>
                            </div>
                        </button>
                        <button data-tab="launch" class="menu-tab flex items-center space-x-2 pb-2">
                            <i class="fa fa-hamburger fa-2x"></i>
                            <div>
                                <small class="block">Special</small>
                                <h6 class="font-bold">Launch</h6>
                            </div>
                        </button>
                        <button data-tab="dinner" class="menu-tab flex items-center space-x-2 pb-2">
                            <i class="fa fa-utensils fa-2x"></i>
                            <div>
                                <small class="block">Lovely</small>
                                <h6 class="font-bold">Dinner</h6>
                            </div>
                        </button>
                    </div>

                    <div id="menu-content">
                        <!-- Konten Tab Breakfast -->
                        <div id="breakfast" class="grid grid-cols-1 lg:grid-cols-2 gap-8 tab-content">
                            @foreach ($menuItems['breakfast'] as $item)
                            <div class="flex items-center text-left">
                                <img class="w-20 h-20 rounded-md mr-4" src="{{ $item['image'] }}" alt="{{ $item['name'] }}">
                                <div class="flex-1 border-b pb-4">
                                    <div class="flex justify-between">
                                        <h5 class="font-bold">{{ $item['name'] }}</h5>
                                        <span class="text-orange-500 font-bold">Rp {{ number_format($item['price'] * 1000, 0, ',', '.') }}</span>
                                    </div>
                                    <small class="italic">{{ $item['description'] }}</small>
                                </div>
                            </div>
                            @endforeach
                        </div>

                         <!-- Konten Tab Launch -->
                        <div id="launch" class="grid grid-cols-1 lg:grid-cols-2 gap-8 tab-content hidden">
                           @foreach ($menuItems['launch'] as $item)
                            <div class="flex items-center text-left">
                                <img class="w-20 h-20 rounded-md mr-4" src="{{ $item['image'] }}" alt="{{ $item['name'] }}">
                                <div class="flex-1 border-b pb-4">
                                    <div class="flex justify-between">
                                        <h5 class="font-bold">{{ $item['name'] }}</h5>
                                        <span class="text-orange-500 font-bold">Rp {{ number_format($item['price'] * 1000, 0, ',', '.') }}</span>
                                    </div>
                                    <small class="italic">{{ $item['description'] }}</small>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <!-- Konten Tab Dinner -->
                        <div id="dinner" class="grid grid-cols-1 lg:grid-cols-2 gap-8 tab-content hidden">
                            @foreach ($menuItems['dinner'] as $item)
                            <div class="flex items-center text-left">
                                <img class="w-20 h-20 rounded-md mr-4" src="{{ $item['image'] }}" alt="{{ $item['name'] }}">
                                <div class="flex-1 border-b pb-4">
                                    <div class="flex justify-between">
                                        <h5 class="font-bold">{{ $item['name'] }}</h5>
                                        <span class="text-orange-500 font-bold">Rp {{ number_format($item['price'] * 1000, 0, ',', '.') }}</span>
                                    </div>
                                    <small class="italic">{{ $item['description'] }}</small>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bagian Reservasi -->
            <div class="relative grid grid-cols-1 md:grid-cols-2">
                <div class="hidden md:block" data-aos="fade-right">
                     <img src="https://images.unsplash.com/photo-1555949963-ff98c8726514?q=80&w=1887&auto=format=fit=crop" alt="Reservation" class="w-full h-full object-cover">
                </div>
                <div class="bg-gray-900 text-white p-12" data-aos="fade-left">
                     <h5 class="ff-pacifico text-orange-500 text-2xl relative inline-block section-title">Reservation</h5>
                     <h1 class="text-4xl font-bold mt-2 mb-8">Book A Table Online</h1>
                     <form>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <input type="text" placeholder="Your Name" class="w-full p-3 bg-gray-800 border border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500">
                            <input type="email" placeholder="Your Email" class="w-full p-3 bg-gray-800 border border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500">
                            <input type="text" placeholder="Date & Time" class="w-full p-3 bg-gray-800 border border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500">
                            <select class="w-full p-3 bg-gray-800 border border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500">
                                <option>No Of People</option>
                                <option>People 1</option>
                                <option>People 2</option>
                                <option>People 3</option>
                            </select>
                        </div>
                        <textarea placeholder="Special Request" rows="5" class="w-full mt-4 p-3 bg-gray-800 border border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500"></textarea>
                        <button type="submit" class="mt-4 w-full bg-orange-500 text-white font-semibold py-3 rounded-md hover:bg-orange-600 transition">BOOK NOW</button>
                     </form>
                </div>
            </div>

            <!-- Bagian Team (Tim Koki) -->
             @php
                // Data ini seharusnya datang dari Controller
                $teamMembers = [
                    ['image' => 'https://via.placeholder.com/200', 'name' => 'Juna Rorimpandey', 'designation' => 'Head Chef'],
                    ['image' => 'https://via.placeholder.com/200', 'name' => 'Renatta Moeloek', 'designation' => 'Pastry Chef'],
                    ['image' => 'https://via.placeholder.com/200', 'name' => 'Arnold Poernomo', 'designation' => 'Sous Chef'],
                    ['image' => 'https://via.placeholder.com/200', 'name' => 'Vindex Tengker', 'designation' => 'Grill Master'],
                ];
            @endphp
            <div class="bg-white text-gray-800 py-24 sm:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8 text-center">
                    <h5 class="ff-pacifico text-orange-500 text-2xl relative inline-block section-title" data-aos="fade-up">Team Members</h5>
                    <h1 class="text-4xl font-bold mt-2 mb-12" data-aos="fade-up">Our Master Chefs</h1>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                        @foreach ($teamMembers as $member)
                        <div class="bg-gray-50 rounded-lg text-center p-4 shadow-lg hover:-translate-y-2 transition-transform duration-300" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                            <img class="w-48 h-48 rounded-full mx-auto border-4 border-gray-200" src="{{ $member['image'] }}" alt="{{ $member['name'] }}">
                            <h5 class="text-xl font-semibold mt-4">{{ $member['name'] }}</h5>
                            <small>{{ $member['designation'] }}</small>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            
            <!-- Bagian Testimonial -->
            @php
                 // Data ini seharusnya datang dari Controller
                $testimonials = [
                    ['image' => 'https://via.placeholder.com/50', 'quote' => 'Makanannya luar biasa! Pelayanannya juga sangat ramah. Pasti akan kembali lagi.', 'name' => 'Budi Santoso', 'profession' => 'Software Engineer'],
                    ['image' => 'https://via.placeholder.com/50', 'quote' => 'Tempat yang nyaman untuk makan malam bersama keluarga. Suasananya hangat dan menunya beragam.', 'name' => 'Citra Lestari', 'profession' => 'Dokter'],
                    ['image' => 'https://via.placeholder.com/50', 'quote' => 'Salah satu restoran terbaik di kota ini. Saya sangat merekomendasikan sate kambingnya!', 'name' => 'Agus Wijaya', 'profession' => 'Pengusaha'],
                ];
            @endphp
            <div class="bg-white text-gray-800 py-24 sm:py-32">
                 <div class="mx-auto max-w-7xl px-6 lg:px-8 text-center">
                    <h5 class="ff-pacifico text-orange-500 text-2xl relative inline-block section-title" data-aos="fade-up">Testimonial</h5>
                    <h1 class="text-4xl font-bold mt-2 mb-12" data-aos="fade-up">Our Clients Say!!!</h1>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        @foreach ($testimonials as $testimonial)
                        <div class="p-6 border rounded-lg shadow-lg {{ $loop->iteration == 2 ? 'bg-orange-500 text-white' : '' }}" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                           <i class="fa fa-quote-left fa-2x mb-4 {{ $loop->iteration == 2 ? 'text-white' : 'text-orange-500' }}"></i>
                           <p>{{ $testimonial['quote'] }}</p>
                           <div class="flex items-center mt-4">
                               <img class="w-12 h-12 rounded-full" src="{{ $testimonial['image'] }}" alt="{{ $testimonial['name'] }}">
                               <div class="ml-4 text-left">
                                   <h5 class="font-semibold">{{ $testimonial['name'] }}</h5>
                                   <small>{{ $testimonial['profession'] }}</small>
                               </div>
                           </div>
                        </div>
                        @endforeach
                    </div>
                 </div>
            </div>

        </main>
        
        <!-- Bagian Footer -->
        <footer id="contact" class="bg-gray-900 text-gray-300 pt-24 pb-12">
            <div class="max-w-7xl mx-auto px-6 lg:px-8 grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h4 class="ff-pacifico text-orange-500 text-2xl mb-4 relative inline-block section-title">Company</h4>
                    <a href="#" class="block mb-2 hover:text-white">> About Us</a>
                    <a href="#" class="block mb-2 hover:text-white">> Contact Us</a>
                    <a href="#" class="block mb-2 hover:text-white">> Reservation</a>
                    <a href="#" class="block mb-2 hover:text-white">> Privacy Policy</a>
                    <a href="#" class="block mb-2 hover:text-white">> Terms & Condition</a>
                </div>
                <div>
                    <h4 class="ff-pacifico text-orange-500 text-2xl mb-4 relative inline-block section-title">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt mr-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt mr-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope mr-3"></i>info@example.com</p>
                    <div class="flex pt-2">
                        <a href="#" class="w-10 h-10 flex items-center justify-center border border-gray-500 rounded-full mr-2 hover:bg-orange-500 hover:border-orange-500"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center border border-gray-500 rounded-full mr-2 hover:bg-orange-500 hover:border-orange-500"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center border border-gray-500 rounded-full mr-2 hover:bg-orange-500 hover:border-orange-500"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center border border-gray-500 rounded-full hover:bg-orange-500 hover:border-orange-500"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="ff-pacifico text-orange-500 text-2xl mb-4 relative inline-block section-title">Opening</h4>
                    <h5 class="font-semibold">Monday - Saturday</h5>
                    <p>09AM - 09PM</p>
                    <h5 class="font-semibold mt-4">Sunday</h5>
                    <p>10AM - 08PM</p>
                </div>
                <div>
                    <h4 class="ff-pacifico text-orange-500 text-2xl mb-4 relative inline-block section-title">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="relative mt-4">
                        <input type="email" placeholder="Your email" class="w-full p-3 bg-gray-800 border border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500">
                        <button type="button" class="absolute top-1.5 right-1.5 bg-orange-500 text-white font-semibold py-2 px-4 rounded-md hover:bg-orange-600">SIGNUP</button>
                    </div>
                </div>
            </div>
            <div class="max-w-7xl mx-auto px-6 lg:px-8 mt-12 border-t border-gray-700 pt-8 flex flex-col md:flex-row justify-between">
                <p>&copy; <a href="#" class="text-orange-400">Restoran Anda</a>, All Right Reserved.</p>
                <p>Designed By <a href="#" class="text-orange-400">HTML Codex</a></p>
            </div>
        </footer>
    </div>
    
    <!-- Tombol "Back to Top" -->
    <a href="#" id="to-top" class="hidden fixed bottom-5 right-5 bg-orange-500 text-white w-10 h-10 rounded-md flex items-center justify-center hover:bg-orange-600 transition z-50">
        <i class="fa fa-arrow-up"></i>
    </a>

    <!-- AOS (Animate On Scroll) Library JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <!-- Script untuk fungsionalitas Tab, Tombol "Back to Top", dan inisialisasi AOS -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Inisialisasi AOS
            AOS.init({
                duration: 800, // Durasi animasi dalam milidetik
                once: true, // Animasi hanya berjalan sekali
            });

            // Logika untuk Tab Menu
            const tabs = document.querySelectorAll('.menu-tab');
            const contents = document.querySelectorAll('.tab-content');

            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    // Non-aktifkan semua tab
                    tabs.forEach(t => t.classList.remove('active-tab'));
                    // Sembunyikan semua konten
                    contents.forEach(c => {
                        c.classList.add('hidden');
                        c.classList.remove('grid');
                    });

                    // Aktifkan tab yang diklik
                    tab.classList.add('active-tab');
                    // Tampilkan konten yang sesuai
                    const contentId = tab.getAttribute('data-tab');
                    const activeContent = document.getElementById(contentId);
                    activeContent.classList.remove('hidden');
                    activeContent.classList.add('grid');
                });
            });

            // Logika untuk tombol "Back to Top"
            const toTopBtn = document.getElementById('to-top');
            window.addEventListener('scroll', () => {
                if(window.pageYOffset > 300) {
                    toTopBtn.classList.remove('hidden');
                } else {
                    toTopBtn.classList.add('hidden');
                }
            });
        });
    </script>
</body>
</html>

