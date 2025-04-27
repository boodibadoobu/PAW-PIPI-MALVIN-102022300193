<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// 1. Tambahkan route untuk menampilkan daftar pengguna

Route::get('/index', [UserController::class, 'index'])->name('users.index');

// 2. Tambahkan route untuk menampilkan form tambah pengguna

Route::get('/index/create', [UserController::class, 'create'])->name('users.create');

// 3. Tambahkan route untuk menyimpan pengguna baru

Route::post('/index', [UserController::class, 'store'])->name('users.store');

// 4. Tambahkan route untuk menampilkan form edit pengguna

Route::get('/index/{id}/edit', [UserController::class, 'edit'])->name('users.edit');

// 5. Tambahkan route untuk menyimpan perubahan pengguna

Route::put('/index/{id}', [UserController::class, 'update'])->name('users.update');

// 6. Tambahkan route untuk menghapus pengguna

Route::delete('/index/{id}', [UserController::class, 'destroy'])->name('users.destroy');
