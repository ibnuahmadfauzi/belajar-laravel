<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;

Route::get('/', function () {
    return view('pages.home'); // pages/home
});

// (nama route, kembalian / anonymous function)
Route::get('/profil', [ProfilController::class, 'index']);

Route::get('/kontak', function () {
    return view('pages.kontak'); // pages/profil
});

Route::get('/tentang', function () {
    return view('pages.tentang'); // pages/profil
});
