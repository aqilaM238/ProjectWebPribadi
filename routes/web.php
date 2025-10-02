<?php

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

    $data_berita = [
        [
            "judul" => "Berita 1",
            "penulis" => "Miyazaki",
            "konten" => "hari ini aku dikerjai fandi",
        ],
        [
            "judul" => "Berita 1",
            "penulis" => "Miyazaki",
            "konten" => "esoknya fandi memalak saya. walaupun sudah saya tolak fandi mengeluarkan jurus hyak hyak nya",
        ],
        [
            "judul" => "Berita 1",
            "penulis" => "Miyazaki",
            "konten" => "setelah saya menang melawan fandi, dia tunduk kepada saya",
        ],
        ];

    return view('berita', [
        "title" => "Berita",
        "beritas" => $data_berita,
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "Kontak",
    ]);
});