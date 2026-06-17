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

        // 🔴 KODE LAMA DIHAPUS: return view('authors.index', compact('authors'));

        // 🟢 KODE BARU: Mengembalikan data yang sudah dijodohkan dalam bentuk JSON
        return response()->json([
            'success' => true,
            'message' => 'Daftar data author beserta bukunya berhasil diambil',
            'data'    => $authors
        ], 200);
    }
}
