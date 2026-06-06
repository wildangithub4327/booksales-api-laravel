<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    // Method statis untuk menyediakan 5 data array sesuai instruksi
    public static function getAllData()
    {
        return [
            [
                'id' => 1,
                'name' => 'Tere Liye',
                'photo' => 'tereliye.jpg',
                'bio' => 'Penulis produktif asal Indonesia yang dikenal dengan novel bergenre fantasi dan fiksi.'
            ],
            [
                'id' => 2,
                'name' => 'Andrea Hirata',
                'photo' => 'andrea_hirata.jpg',
                'bio' => 'Penulis novel Laskar Pelangi yang sukses membawa sastra Indonesia ke kancah internasional.'
            ],
            [
                'id' => 3,
                'name' => 'Dee Lestari',
                'photo' => 'dee_lestari.jpg',
                'bio' => 'Penyanyi sekaligus penulis berbakat yang menciptakan seri terkenal Aroma Karsa dan Supernova.'
            ],
            [
                'id' => 4,
                'name' => 'Pramoedya Ananta Toer',
                'photo' => 'pramoedya.jpg',
                'bio' => 'Sastrawan legendaris Indonesia dengan karya monumentalnya, Tetralogi Buru.'
            ],
            [
                'id' => 5,
                'name' => 'Ahmad Fuadi',
                'photo' => 'ahmad_fuadi.jpg',
                'bio' => 'Mantan jurnalis dan penulis novel populer Negeri 5 Menara yang menginspirasi banyak orang.'
            ],
        ];
    }
}
