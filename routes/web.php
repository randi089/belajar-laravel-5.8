<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    $nama['nama'] = 'Tasya Aryati Sakinah';
    return view('about', $nama);
});
