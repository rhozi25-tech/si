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
            "isi" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti accusantium ipsum sit animi aspernatur voluptate doloribus non? Doloremque nulla tempore inventore laudantium? Totam harum est eius molestias debitis cum voluptate veniam, repellat dolorem dolore. Quisquam autem laboriosam dolore quam atque consequatur illo tempore exercitationem dignissimos harum iusto expedita accusamus vel excepturi repellendus doloribus, fuga pariatur aspernatur voluptates voluptate mollitia ratione? Cum laboriosam, laudantium pariatur blanditiis totam vel, saepe voluptates eum quaerat atque hic provident amet, dolores repellat repudiandae laborum incidunt. Laboriosam velit quis mollitia odio optio, labore ad debitis dolore, sunt quos eligendi tenetur unde, id cumque reiciendis quam corrupti!"

        ],

        [
            "title" => "Pendaftaran Pelatihan & Sertifikasi Baca Al Quran Bersanad Surah Al Fatihah Batch IV | Academy Gerakan Sekolah Impian",
            "slug" => "Pendaftaran-Pelatihan-Sertifikasi-Baca-Al-Quran-Bersanad-Surah Al-Fatihah-Batch-IV-|-Academy-Gerakan-Sekolah-Impian",
            "gambar" => "../assets/img/program/pelatihan-alfatihah.jpg",
            "penulis" => "Sandhika",
            "isi" => "Daurah Sertifikasi Surah Al Fatihah Batch IV yang diselenggarakan oleh Sekolah Impian bersama dengan Syekh Muhammad Bin Musthafa As Subhi, Berkebangsaan Mesir dan Pemateri Ilmu Al Quran di Mesir, Indonesia, dan Malaysia. 
            
            Terima kasih atas antusiasme dan partisipasi Anda dalam Daurah Sertifikasi Surah Al Fatihah Batch IV. Semoga Program ini memberikan manfaat dan keberkahan dalam perjalanan spiritual Anda.",
            "kategori" => [
                "pelatihan" => [
                    "judul" => "Pendaftaran Pelatihan & Sertifikasi Baca Al Quran Bersanad Surah Al Fatihah Batch IV | Academy Gerakan Sekolah Impian",
                    
                ]
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
