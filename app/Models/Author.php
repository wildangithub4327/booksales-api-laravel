<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    // Method statis untuk menyediakan 5 data array Author dummy
    public static function getAllData()
    {
        return [
            [
                'id' => 1,
                'name' => 'Tere Liye',
                'photo' => 'tereliye.jpg',
                'bio' => 'Penulis produktif Indonesia yang dikenal dengan berbagai novel best-seller lintas genre.'
            ],
            [
                'id' => 2,
                'name' => 'Andrea Hirata',
                'photo' => 'andrea.jpg',
                'bio' => 'Penulis novel terkenal Laskar Pelangi yang mengangkat nama Belitung ke kancah internasional.'
            ],
            [
                'id' => 3,
                'name' => 'Dee Lestari',
                'photo' => 'deelestari.jpg',
                'bio' => 'Nama pena dari Dewi Lestari, seorang penulis novel fiksi populer seperti seri Supernova.'
            ],
            [
                'id' => 4,
                'name' => 'Pramoedya Ananta Toer',
                'photo' => 'pramoedya.jpg',
                'bio' => 'Salah satu sastrawan besar Indonesia yang karyanya telah diterjemahkan ke dalam banyak bahasa.'
            ],
            [
                'id' => 5,
                'name' => 'Ahmad Fuadi',
                'photo' => 'afuadi.jpg',
                'bio' => 'Mantan jurnalis yang menjadi penulis novel religi inspiratif Negeri 5 Menara.'
            ],
        ];
    }
}
