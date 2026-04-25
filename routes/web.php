<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriController;

Route::resource('kategori', KategoriController::class);

// Public routes
Route::get('/', [BarangController::class, 'publicIndex'])->name('welcome');

// Auth routes
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin routes (protected by admin session)
Route::middleware(['admin'])->group(function () {
    Route::get('/admin', [BarangController::class, 'index'])->name('admin.index');
    Route::get('/admin/barangs/create', [BarangController::class, 'create'])->name('barangs.create');
    Route::post('/admin/barangs', [BarangController::class, 'store'])->name('barangs.store');
    Route::get('/admin/barangs/{id}/edit', [BarangController::class, 'edit'])->name('barangs.edit');
    Route::put('/admin/barangs/{id}', [BarangController::class, 'update'])->name('barangs.update');
    Route::delete('/admin/barangs/{id}', [BarangController::class, 'destroy'])->name('barangs.destroy');
});
