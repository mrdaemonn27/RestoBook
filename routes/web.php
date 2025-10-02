<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\MenuController as AdminMenuController;
use Illuminate\Support\Facades\Route;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Halaman daftar menu untuk publik
Route::get('/menu', [MenuController::class, 'index'])->name('menus.index');

// Rute untuk menampilkan form reservasi (bisa diakses publik)
Route::get('/reservations/create', [ReservationController::class, 'create'])->name('reservations.create');

// Rute yang memerlukan autentikasi
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        // Cek role dan redirect ke dashboard yang sesuai
        if(auth()->user()->isAdmin() || auth()->user()->isStaff()) {
            return redirect()->route('admin.dashboard');
        }
        $reservations = \App\Models\Reservation::where('user_id', auth()->id())->with('table')->latest()->get();
        return view('dashboard', compact('reservations'));
    })->middleware(['verified'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rute untuk MENYIMPAN reservasi (membutuhkan login)
    Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
});

// Rute untuk Admin & Staff
Route::middleware(['auth', 'role:admin,staff'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    // CRUD Menu
    Route::resource('menus', AdminMenuController::class);
});


require __DIR__.'/auth.php';

