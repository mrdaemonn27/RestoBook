<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController; // Tambahkan ini
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\Admin\MenuController as AdminMenuController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;

/*
|--------------------------------------------------------------------------
| Rute Publik (Bisa diakses tanpa login)
|--------------------------------------------------------------------------
*/

// Rute untuk halaman utama (welcome)
Route::get('/', function () {
    return view('welcome');
});

// Rute untuk halaman menu
Route::get('/menu', [MenuController::class, 'index'])->name('menus.index');

// Rute untuk menampilkan form pembuatan reservasi
Route::get('/reservations/create', [ReservationController::class, 'create'])->name('reservations.create');


/*
|--------------------------------------------------------------------------
| Rute Pengguna Terautentikasi (Harus login)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->group(function () {
    // Rute dashboard utama, sekarang menunjuk ke DashboardController
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Rute untuk profil pengguna
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rute untuk MENYIMPAN data reservasi
    Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
});


/*
|--------------------------------------------------------------------------
| Rute Khusus Admin & Staff
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:admin,staff'])->prefix('admin')->name('admin.')->group(function () {
    // Rute dashboard admin
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    // Rute untuk mengelola menu (CRUD)
    Route::resource('menus', AdminMenuController::class);
});

// Memuat rute untuk otentikasi (login, register, dll.)
require __DIR__.'/auth.php';
