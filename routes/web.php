<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home'); // pages/home
});

// (nama route, kembalian / anonymous function)
Route::get('/profil', function () {
    return view('pages.profil'); // pages/profil
});

Route::get('/kontak', function () {
    return view('pages.kontak'); // pages/profil
});

Route::get('/tentang', function () {
    return view('pages.tentang'); // pages/profil
});
