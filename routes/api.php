<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// =========================================================================
// RUTE PUBLIK (Bisa diakses semua orang, bahkan yang belum login/autentikasi)
// =========================================================================
// Hanya mengaktifkan fitur 'index' (Read All) dan 'show' (Show 1 Data)
Route::apiResource('genres', GenreController::class)->only(['index', 'show']);
Route::apiResource('authors', AuthorController::class)->only(['index', 'show']);


// =========================================================================
// RUTE PRIVATE/ADMIN (Hanya bisa diakses oleh yang sudah terautentikasi)
// =========================================================================
// Menggunakan middleware 'auth:sanctum' untuk mengunci fitur Create, Update, Destroy
Route::middleware('auth:sanctum')->group(function () {

    // Mengaktifkan sisa fitur CRUD yaitu 'store', 'update', dan 'destroy'
    Route::apiResource('genres', GenreController::class)->only(['store', 'update', 'destroy']);
    Route::apiResource('authors', AuthorController::class)->only(['store', 'update', 'destroy']);

});
