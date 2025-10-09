<?php

use App\Models\Berita;
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

Route::get('/berita', function () {

    return view('berita', [
        "title" => "Berita",
        "beritas" => Berita::ambildata(),
    ]);
});

Route::get('/berita/{slug}', function ($slugp) {




    return view('singleberita', [
        "title" => "Berita",
        "new_berita" => Berita::caridata($slugp),
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "Kontak",
    ]);
});