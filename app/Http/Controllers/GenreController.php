<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    // GET /api/genres
    public function index()
    {
        $genres = Genre::getAllData();

        return response()->json([
            'success' => true,
            'message' => 'Daftar data genre berhasil diambil',
            'data' => $genres
        ], 200);
    }

    // GET /api/genres/{id}
    public function show($id)
    {
        $genres = Genre::getAllData();

        foreach ($genres as $genre) {
            if ($genre['id'] == $id) {
                return response()->json([
                    'success' => true,
                    'message' => 'Detail genre berhasil diambil',
                    'data' => $genre
                ], 200);
            }
        }

        return response()->json([
            'success' => false,
            'message' => 'Genre tidak ditemukan'
        ], 404);
    }

    // POST /api/genres
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string'
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data genre baru berhasil ditambahkan (Simulasi)',
            'data' => [
                'id' => rand(10, 100),
                'name' => $request->name
            ]
        ], 201);
    }

    // PUT /api/genres/{id}
    public function update(Request $request, $id)
    {
        $genres = Genre::getAllData();

        // Validasi jika data ID tidak ada di array statis
        $genreExists = collect($genres)->contains('id', (int)$id);
        if (!$genreExists) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal update, data genre tidak ditemukan'
            ], 404);
        }

        $request->validate([
            'name' => 'required|string'
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data genre berhasil diperbarui (Simulasi)',
            'data' => [
                'id' => (int)$id,
                'name' => $request->name
            ]
        ], 200);
    }

    // DELETE /api/genres/{id}
    public function destroy($id)
    {
        $genres = Genre::getAllData();

        // Validasi jika data ID tidak ada di array statis
        $genreExists = collect($genres)->contains('id', (int)$id);
        if (!$genreExists) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menghapus, data genre tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Data genre berhasil dihapus (Simulasi)',
            'deleted_id' => (int)$id
        ], 200);
    }
}
