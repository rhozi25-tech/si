<?php

namespace App\Models;


class Post
{
    public static $program_posts = [
        [
            "title" => "judul 1",
            "slug" => "judul-1",
            "gambar" => "https://maxipro.co.id/wp-content/uploads/2021/11/semua-serba-online-Maxipro.png",
            "penulis" => "Barrur Rhozi",
            "isi" => "-",
            "via" => [
                "pelatihan" => "",
                "buku" => "",
                "video pembelajaran" => "",
                "slide pembelajaran" => "",
            ],
            "persyaratan" => "persyaratan",
            "benefit" => "benefit",
            "pelaksanaan" => "pelaksanaan",
            "biaya" => [
                "Paket 1" => "1",
                "Paket 2" => "2"
            ]

        ],

        [
            "title" => "Pendaftaran Pelatihan & Sertifikasi Baca Al Quran Bersanad Surah Al Fatihah Batch IV | Academy Gerakan Sekolah Impian",
            "slug" => "Pendaftaran-Pelatihan-Sertifikasi-Baca-Al-Quran-Bersanad-Surah Al-Fatihah-Batch-IV-|-Academy-Gerakan-Sekolah-Impian",
            "gambar" => "../assets/img/program/pelatihan-alfatihah.jpg",
            "penulis" => "Barrur Rhozi",
            "isi" => "Daurah Sertifikasi Surah Al Fatihah Batch IV yang diselenggarakan oleh Sekolah Impian bersama dengan Syekh Muhammad Bin Musthafa As Subhi, Berkebangsaan Mesir dan Pemateri Ilmu Al Quran di Mesir, Indonesia, dan Malaysia. 
            
            Terima kasih atas antusiasme dan partisipasi Anda dalam Daurah Sertifikasi Surah Al Fatihah Batch IV. Semoga Program ini memberikan manfaat dan keberkahan dalam perjalanan spiritual Anda.",
            "via" => [
                "pelatihan" => "",
                "buku" => "",
                "video pembelajaran" => "",
                "slide pembelajaran" => "",
            ],
            "persyaratan" => "persyaratan",
            "benefit" => "benefit",
            "pelaksanaan" => "pelaksanaan",
            "biaya" => [
                "Paket 1" => "1",
                "Paket 2" => "2"
            ]


        ],
    ];

    public static function all()
    {
        return collect(self::$program_posts);
    }

    public static function find($slug)
    {
        $postingan = static::all();

        // $new_post = [];
        // foreach ($postingan as $post) {
        //     if ($post['slug'] === $slug) {
        //         $new_post = $post;
        //     }
        // }

        return $postingan->firstWhere('slug', $slug);
    }
}
