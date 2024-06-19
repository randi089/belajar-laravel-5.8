<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MahasiswaController;

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     $nama['nama'] = 'Tasya Aryati Sakinah';
//     return view('about', $nama);
// });

Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
