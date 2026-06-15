<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;

class AuthorController extends Controller
{
    public function index()
    {
        // 1. Ambil semua array data statis
        $authors = Author::getAllData();
        $books = Book::getAllData();

        // 2. Jodohkan data buku ke penulis yang sesuai ID-nya secara manual
        foreach ($authors as $key => $author) {
            $authorBooks = [];
            foreach ($books as $book) {
                if ($book['author_id'] === $author['id']) {
                    $authorBooks[] = $book;
                }
            }
            // Masukkan list buku yang cocok ke dalam data author tersebut
            $authors[$key]['books'] = $authorBooks;
        }

        // 3. Mengirimkan data yang sudah digabung ke file view authors.index
        return view('authors.index', compact('authors'));
    }
}
