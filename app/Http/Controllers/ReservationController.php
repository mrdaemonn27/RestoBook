<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Menampilkan form untuk membuat reservasi baru.
     */
    public function create()
    {
        // Method ini akan mencoba menampilkan file view yang ada di
        // resources/views/reservations/create.blade.php
        return view('reservations.create');
    }

    /**
     * Menyimpan reservasi baru ke database.
     * (Kita akan lengkapi ini nanti)
     */
    public function store(Request $request)
    {
        // Logika untuk menyimpan data akan ditambahkan di sini
    }
}

