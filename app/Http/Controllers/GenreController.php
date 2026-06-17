<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        // Mengambil array data dari model Genre
        $genres = Genre::getAllData();

        // 🔴 KODE LAMA DIHAPUS: return view('genres.index', compact('genres'));

        // 🟢 KODE BARU: Mengembalikan data dalam bentuk JSON
        return response()->json([
            'success' => true,
            'message' => 'Daftar data genre berhasil diambil',
            'data'    => $genres
        ], 200);
    }
}
