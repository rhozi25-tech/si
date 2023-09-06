<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('program', [
            'title' => "Program SI",
            'posts' => Post::all()
        ]);
    }

    public function show(Post $slug)
    {
        return view('post', [
            'title' => "Halaman Post",
            'post' => $slug
        ]);
    }

    public function insertData()
    {
        $data = [
            'title' => 'Pendaftaran Pelatihan & Sertifikasi Baca Al Quran Bersanad Surah Al Fatihah Batch IV | Academy Gerakan Sekolah Impian',
            'slug' => 'Pendaftaran-Pelatihan-Sertifikasi-Baca-Al-Quran-Bersanad-Surah Al-Fatihah-Batch-IV-|-Academy-Gerakan-Sekolah-Impian',
            'gambar' => '../assets/img/program/pelatihan-alfatihah.jpg',
            'penulis' => 'Barrur Rhozi',
            'isi' => 'Daurah Sertifikasi Surah Al Fatihah Batch IV yang diselenggarakan oleh Sekolah Impian bersama dengan Syekh Muhammad Bin Musthafa As Subhi, Berkebangsaan Mesir dan Pemateri Ilmu Al Quran di Mesir, Indonesia, dan Malaysia. 
            
            Terima kasih atas antusiasme dan partisipasi Anda dalam Daurah Sertifikasi Surah Al Fatihah Batch IV. Semoga Program ini memberikan manfaat dan keberkahan dalam perjalanan spiritual Anda.',
            'via' => json_encode(['pelatihan', 'buku', 'video', 'slide']),
            'persyaratan' => json_encode(['Minimal Usia 15 Tahun', 'Mampu membaca Al Quran dengan Baik & Benar', 'Menyelesaikan Program hingga selesai', 'Menyelesaikan Prosedur Pendaftaran']),
            'benefit' => json_encode(['Materi mengenai Kesalahan Umum membaca Surah Al Fatihah', 'Bimbingan Privat oleh Syekh & Ustadz Ahli serta Bersanad', 'Mendapatkan Ijazah Sanad Elektronik atau Sertifikat Elektronik', 'Diagnosa Tahsin Surah Al Fatihah']),
            'pelaksanaan' => json_encode(['Live menggunakan Zoom Meeting atau Video Call Whatsapp', 'Peserta menyerahkan Rekaman audio Bacaan Surah Al Fatihah paling lambat Hari Coming Soon', 'Pertemuan 1 : Coming Soon', 'Pertemuan 2 : Coming Soon', 'Pertemuan 3 : Coming Soon', 'Pertemuan 4 : Coming Soon']),
            'biaya' => json_encode(['Paket 1' => 100, 'Paket 2' => 200]),
        ];

        Post::create($data);

        return "Data berhasil disimpan.";
    }
}
