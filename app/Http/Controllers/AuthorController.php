<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;

class AuthorController extends Controller
{
    // GET /api/authors
    public function index()
    {
        $authors = Author::getAllData();
        $books = Book::getAllData();

        foreach ($authors as $key => $author) {
            $authorBooks = [];

            foreach ($books as $book) {
                if ($book['author_id'] === $author['id']) {
                    $authorBooks[] = $book;
                }
            }

            $authors[$key]['books'] = $authorBooks;
        }

        return response()->json([
            'success' => true,
            'message' => 'Daftar data author beserta bukunya berhasil diambil',
            'data' => $authors
        ], 200);
    }

    // GET /api/authors/{id}
    public function show($id)
    {
        $authors = Author::getAllData();
        $books = Book::getAllData();

        foreach ($authors as $author) {

            if ($author['id'] == $id) {

                $authorBooks = [];

                foreach ($books as $book) {
                    if ($book['author_id'] == $author['id']) {
                        $authorBooks[] = $book;
                    }
                }

                $author['books'] = $authorBooks;

                return response()->json([
                    'success' => true,
                    'message' => 'Detail author berhasil diambil',
                    'data' => $author
                ], 200);
            }
        }

        return response()->json([
            'success' => false,
            'message' => 'Author tidak ditemukan'
        ], 404);
    }

    // POST /api/authors
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string'
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data author baru berhasil ditambahkan (Simulasi)',
            'data' => [
                'id' => rand(10, 100),
                'name' => $request->name,
                'books' => []
            ]
        ], 201);
    }

    // PUT /api/authors/{id}
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string'
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data author berhasil diperbarui (Simulasi)',
            'data' => [
                'id' => $id,
                'name' => $request->name
            ]
        ], 200);
    }

    // DELETE /api/authors/{id}
    public function destroy($id)
    {
        return response()->json([
            'success' => true,
            'message' => 'Data author berhasil dihapus (Simulasi)',
            'deleted_id' => $id
        ], 200);
    }
}
