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
            "konten" => "Radahn adalah General Starscourge, salah satu prajurit terkuat pasca Shattering Elden Ring, yang menghabiskan sisa hidupnya dikuasai Scarlet Rot setelah bertarung sengit dengan Malenia. Ia mengendarai kuda normal dan memiliki fisik sangat besar, bahkan menguasai bintang-bintang dan memimpin pasukannya yang setia. Namun, ia akhirnya menjadi gila karena wabah Scarlet Rot dari Malenia, dan Festival Radahn diadakan oleh para pengikutnya untuk memberinya kematian dalam pertempuran yang diidamkannya. ",
        ],
        [
            "judul" => "Story Malenia",
            "slug" => "story-malenia",
            "penulis" => "Miyazaki",
            "konten" => "Malenia adalah putri Marika dan Radagon dan saudara kembar Miquella, yang dilahirkan dengan kutukan ganda: penyakit busuk merah (Scarlet Rot) yang menggerogoti tubuhnya dan keistimewaan sebagai Empyrean. Ia dan Miquella berusaha mencari obat untuk kutukan mereka, tetapi Malenia justru melepaskan Scarlet Rot dalam pertempurannya melawan Radahn di Caelid, yang menyebabkan Radahn menjadi gila. Malenia lalu menjadi bos legendaris yang dikenal sebagai Pedang Miquella dan menunggu kembalinya Miquella di tempatnya sekarang. ",
        ],
        [
            "judul" => "Story Miquella",
            "slug" => "story-miquella",
            "penulis" => "Miyazaki",
            "konten" => "Miquella adalah salah satu dari dua anak dewi Marika dan Radagon, seorang Empyrean yang memiliki potensi untuk menjadi dewa, namun memilih untuk mengutuk dirinya dengan keburukan agar dapat melindungi saudarinya, Malenia. Miquella menciptakan Haligtree untuk menjadi tempat perlindungan bagi saudarinya dan untuk menghormati ajaran Ordo Emas, tetapi ia akhirnya jatuh ke tangan Mohg, Lord Darah, yang memenjarakannya di dalam kepompong dan menjadikannya subjek dari rencana jahatnya. ",
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
