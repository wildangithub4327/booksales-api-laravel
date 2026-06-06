<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        // Mengambil array data dari model Author
        $authors = Author::getAllData();

        // Mengirimkan data ke file view authors.index
        return view('authors.index', compact('authors'));
    }
}
