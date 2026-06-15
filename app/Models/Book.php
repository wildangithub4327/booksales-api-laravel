<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // Method statis untuk menyediakan 5 data array Book dummy
    public static function getAllData()
    {
        return [
            [
                'id' => 1,
                'author_id' => 1,
                'title' => 'Bumi (Earth Series)',
                'publication_year' => 2014,
                'isbn' => '9786020301120'
            ],
            [
                'id' => 2,
                'author_id' => 2,
                'title' => 'Laskar Pelangi',
                'publication_year' => 2005,
                'isbn' => '9789793062792'
            ],
            [
                'id' => 3,
                'author_id' => 3,
                'title' => 'Aroma Karsa',
                'publication_year' => 2018,
                'isbn' => '9786022914631'
            ],
            [
                'id' => 4,
                'author_id' => 4,
                'title' => 'Bumi Manusia',
                'publication_year' => 1980,
                'isbn' => '9789799731234'
            ],
            [
                'id' => 5,
                'author_id' => 5,
                'title' => 'Negeri 5 Menara',
                'publication_year' => 2009,
                'isbn' => '9789792248456'
            ],
        ];
    }
}
