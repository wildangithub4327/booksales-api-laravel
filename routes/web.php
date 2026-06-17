<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Jalur rute web lama untuk genres dan authors sudah dihapus dari sini
| karena dialihkan sepenuhnya ke API.
|
*/

Route::get('/', function () {
    return view('welcome');
});
