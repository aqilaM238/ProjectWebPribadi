<?php

use App\Models\Berita;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "nama" => "Luvita Hadiningrum",
        "nohp" => "08891238725651",
        "foto" => "img/Screenshot (259).png",
    ]);
});

Route::get('/berita', [BeritaController::class, 'index'] );

Route::get('/berita/{slug}', [BeritaController::class, 'tampildata']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index'] )->name('mahasiswa');

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "Kontak",
    ]);
});