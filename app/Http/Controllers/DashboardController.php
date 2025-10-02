<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class DashboardController extends Controller
{
    /**
     * Menampilkan halaman dashboard yang sesuai berdasarkan role pengguna.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Contracts\View\View
     */
    public function index(): RedirectResponse|View
    {
        $user = Auth::user();

        // 1. Cek jika pengguna adalah Admin atau Staff
        // Jika ya, arahkan langsung ke dashboard admin.
        if ($user->isAdmin() || $user->isStaff()) {
            return redirect()->route('admin.dashboard');
        }

        // 2. Jika bukan admin/staff, maka dia adalah pengguna biasa.
        // Ambil data reservasi milik pengguna yang sedang login.
        $reservations = Reservation::where('user_id', $user->id)
            ->with('table') // Mengambil relasi 'table' untuk efisiensi query
            ->latest()      // Mengurutkan dari yang terbaru
            ->get();

        // 3. Tampilkan view dashboard pengguna dan kirim data reservasi
        return view('dashboard', compact('reservations'));
    }
}
