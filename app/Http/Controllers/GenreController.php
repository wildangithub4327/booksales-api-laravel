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

        // Mengirimkan data ke file view genres.index
        return view('genres.index', compact('genres'));
    }
}
