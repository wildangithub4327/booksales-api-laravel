<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    // Method statis untuk menyediakan 5 data array sesuai instruksi
    public static function getAllData()
    {
        return [
            [
                'id' => 1,
                'name' => 'Fiksi',
                'description' => 'Buku yang berisi cerita rekaan atau khayalan penulis.'
            ],
            [
                'id' => 2,
                'name' => 'Sains',
                'description' => 'Buku bertema ilmu pengetahuan alam dan teknologi.'
            ],
            [
                'id' => 3,
                'name' => 'Sejarah',
                'description' => 'Buku yang membahas peristiwa masa lalu dan fakta sejarah.'
            ],
            [
                'id' => 4,
                'name' => 'Misteri',
                'description' => 'Buku penuh teka-teki, detektif, dan ketegangan.'
            ],
            [
                'id' => 5,
                'name' => 'Biografi',
                'description' => 'Kisah hidup seseorang yang ditulis oleh orang lain.'
            ],
        ];
    }
}
