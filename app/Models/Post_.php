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
            "persyaratan" => [
                "1" => "persyaratan 1",
                "2" => "persyaratan 2",
                "3" => "persyaratan 3"
            ],
            "benefit" => [
                "1" => "benefit 1",
                "2" => "benefit 2",
                "3" => "benefit 3"
            ],
            "pelaksanaan" => [
                "1" => "ke 1",
                "2" => "ke 2",
                "3" => "ke 3",
                "4" => "ke 4"
            ],
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
            "persyaratan" => [
                "1" => "Minimal Usia 15 Tahun",
                "2" => "Mampu membaca Al Quran dengan Baik & Benar",
                "3" => "Menyelesaikan Program hingga selesai",
                "4" => "Menyelesaikan Prosedur Pendaftaran"
            ],
            "benefit" => [
                "1" => "Materi mengenai Kesalahan Umum membaca Surah Al Fatihah",
                "2" => "Bimbingan Privat oleh Syekh & Ustadz Ahli serta Bersanad",
                "3" => "Mendapatkan Ijazah Sanad Elektronik atau Sertifikat Elektronik",
                "4" => "Diagnosa Tahsin Surah Al Fatihah"
            ],
            "pelaksanaan" => [
                "1" => "Live menggunakan Zoom Meeting atau Video Call Whatsapp",
                "2" => "Peserta menyerahkan Rekaman audio Bacaan Surah Al Fatihah paling lambat Hari Coming Soon",
                "3" => "Pertemuan 1 : Coming Soon",
                "4" => "Pertemuan 2 : Coming Soon",
                "5" => "Pertemuan 3 : Coming Soon",
                "6" => "Pertemuan 4 : Coming Soon",
            ],
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
