<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// =========================
// GENRE CRUD
// =========================

// Read All Genre
Route::get('/genres', [GenreController::class, 'index']);

// Read Genre By ID
Route::get('/genres/{id}', [GenreController::class, 'show']);

// Create Genre
Route::post('/genres', [GenreController::class, 'store']);

// Update Genre
Route::put('/genres/{id}', [GenreController::class, 'update']);

// Delete Genre
Route::delete('/genres/{id}', [GenreController::class, 'destroy']);


// =========================
// AUTHOR CRUD
// =========================

// Read All Author
Route::get('/authors', [AuthorController::class, 'index']);

// Read Author By ID
Route::get('/authors/{id}', [AuthorController::class, 'show']);

// Create Author
Route::post('/authors', [AuthorController::class, 'store']);

// Update Author
Route::put('/authors/{id}', [AuthorController::class, 'update']);

// Delete Author
Route::delete('/authors/{id}', [AuthorController::class, 'destroy']);
