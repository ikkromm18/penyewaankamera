<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.hero');
});
Route::get('/about', function () {
    return view('landing.about');
});
Route::get('/services', function () {
    return view('landing.services');
});
// Route::get('/order', function () {
//     return view('landing.order');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Transaksi
Route::get('/order', [TransaksiController::class, 'order'])->name('transaksi.order');
Route::get('/transaksi/create', [TransaksiController::class, 'index'])->name('transaksi.index');
Route::post('/transaksi', [TransaksiController::class, 'store'])->name('transaksi.store');

require __DIR__ . '/auth.php';
