<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
        private static $data_berita = [
        [
            "judul" => "Story Radahn",
            "slug" => "story-radahn",
            "penulis" => "Miyazaki",
            "konten" => "hari ini aku dikerjai fandi",
        ],
        [
            "judul" => "Story Malenia",
            "slug" => "story-malenia",
            "penulis" => "Miyazaki",
            "konten" => "esoknya fandi memalak saya. walaupun sudah saya tolak fandi mengeluarkan jurus hyak hyak nya",
        ],
        [
            "judul" => "Story Miquella",
            "slug" => "story-miquella",
            "penulis" => "Miyazaki",
            "konten" => "setelah saya menang melawan fandi, dia tunduk kepada saya",
        ],
        ];

        public static function ambildata()
        {
            return Self::$data_berita;
        }

        public static function caridata($slugp)
        {
            $data_beritas = Self::$data_berita;
            $new_berita = [];

            foreach($data_beritas as $berita)
            {
                if($berita["slug"] === $slugp)
                {
                    $new_berita = $berita;
                }
             }
             return $new_berita;
         }
  



}
