<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController; // ✅ Udah diganti "App" (A gede)
use App\Http\Controllers\AuthorController; // ✅ Udah diganti "App" (A gede)

Route::get('/', function () {
    return view('welcome');
});

// Jalur URL untuk menampilkan halaman Genre
Route::get('/genres', [GenreController::class, 'index']);

// Jalur URL untuk menampilkan halaman Author
Route::get('/authors', [AuthorController::class, 'index']);
