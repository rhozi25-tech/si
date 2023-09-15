@extends('layouts/main')
@section('isi')
    <!--====== Banner Slider Start ======-->
    <section class="banner-slider banner-slider-two banner-slider-active">
        <div class="single-banner warna-si-oren">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="banner-text">
                            <div class="banner-content">
                                <span data-animation="fadeInUp" data-delay="0.3s" class="title-tag">
                                    Assalamualaikum wr.wb
                                </span>
                                <h1 data-animation="fadeInLeft" data-delay="0.6s" class="title">
                                    Selamat Datang di <b>Sekolah Impian</b>
                                </h1>
                                <div class="hero-banner2">
                                    <img class="img-fluid" src="awal.png">
                                </div>
                                <p data-animation="fadeInLeft" class="text-justify" data-delay=".9s">
                                    Mulia di Akhirat dengan menghafal Al-Quran dan Mulia di Dunia dengan Teknologi, Bisnis
                                    dan Dakwah
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 hero-banner">
                        <img class="img-fluid" src="awal.png" alt="">
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!--====== Banner Slider End ======-->

    <div class="unggulan">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center" style="margin: 100px 0 50px 0">
                    <h2 class="teks-si-oren">4 Program Unggulan</h2>
                </div>
            </div>
            <div class="row mb-2 text-center">
                <div class="col-sm-3 mb-5">
                    <div class="card shadow">
                        <img src="tahfiz/unggulan.jpg" class="card-img-top"
                            style="height: 190px; background-size: cover; background-position: center center"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title teks-si-oren">Tahfizhul Quran</h5>
                            <a href="/bidang-tahfiz" class="btn btn-outline-secondary">Baca Lengkap</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-5">
                    <div class="card shadow">
                        <img src="it/unggulan.jpg" class="card-img-top"
                            style="height: 190px; background-size: cover; background-position: center center"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title teks-si-oren">Teknologi Informasi</h5>
                            <a href="/bidang-it" class="btn btn-outline-secondary">Baca Lengkap</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-5">
                    <div class="card shadow">
                        <img src="bahasa/unggulan.jpg" class="card-img-top"
                            style="height: 190px; background-size: cover; background-position: center center"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title teks-si-oren">Bidang Bahasa</h5>
                            <a href="/bidang-bahasa" class="btn btn-outline-secondary">Baca Lengkap</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-5">
                    <div class="card shadow">
                        <img src="karakter/unggulan.jpg" class="card-img-top"
                            style="height: 190px; background-size: cover; background-position: center center"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title teks-si-oren">Bidang Karakter</h5>
                            <a href="/bidang-karakter" class="btn btn-outline-secondary">Baca Lengkap</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#f6921f" fill-opacity="1"
            d="M0,160L48,149.3C96,139,192,117,288,117.3C384,117,480,139,576,170.7C672,203,768,245,864,266.7C960,288,1056,288,1152,261.3C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
    <div class="why warna-si-oren">
        <div class="container">
            <div class="row p-3">
                <div class="col-sm-12">
                    <h2 class="mt-5 mb-4 text-center text-white">Tentang Sekolah Impian </h2>
                </div>
                <div class="col-sm-12 mb-1">
                    <div class="embed-responsive embed-responsive-16by9 hero-banner2">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zKIDWTOx0Xk"
                            title="Sekilas Profil Sekolah Impian (Quadrant Boarding School dan Fahim Quran Plus)"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-sm-7">

                    <p class="text-justify" style="font-size: 13pt">Sekolah Impian adalah institusi dakwah yang memilih
                        pendidikan sebagai jalan perjuangannya. Misi kami adalah mengintegrasikan AlQuran dengan teknologi,
                        bahasa, dan karakter. Dengan cara menghasilkan generasi yang mulia di akhirat dengan menghafal Quran
                        & mulia didunia karena memiliki life skill teknologi. Insya Allah Ta’ala mereka akan menjadi
                        generasi muda yang cerdas, canggih, namun tetap soleh.<br><br>

                        Sampai sekarang level pendidikan yang kami selenggarakan adalah tingkat SMP dan SMA, insya Allah
                        kami sedang berjuang untuk menyelenggarakan level pendidikan yang lain baik TK, SD, maupun level
                        yang lebih tinggi baik Vokasi hingga Universitas, Insya Allah.
                    </p>
                </div>

                <div class="col-sm-5 d-flex justify-content-center align-items-center">
                    <div class="embed-responsive embed-responsive-16by9 hero-banner">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zKIDWTOx0Xk"
                            title="Sekilas Profil Sekolah Impian (Quadrant Boarding School dan Fahim Quran Plus)"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#f6921f" fill-opacity="1"
            d="M0,160L48,149.3C96,139,192,117,288,117.3C384,117,480,139,576,170.7C672,203,768,245,864,266.7C960,288,1056,288,1152,261.3C1248,235,1344,181,1392,154.7L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
        </path>
    </svg>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center" style="margin: 100px 0 50px 0">
                <h2 class="teks-si-oren">Keunggulan Kami</h2>
                <p class="teks-si-oren" style="font-size: 16pt">Kenapa Sekolah Impian menjadi pilihan terbaik ?</p>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-sm-3 mt-4">
                <div class="shadow d-flex align-items-center flex-column bd-highlight mb-1 p-2" style="height: 200px;">
                    <div class="p-2 bd-highlight"><img class="img-fluid" src="assets/img/program/3.png" width="70"
                            height="70"></div>
                    <div class="mt-auto p-2 bd-highlight">
                        <p style="color:#00a59a; font-size: 12pt; font-weight:bold; text-align:center">
                            Keseimbangan
                            orientasi pendidikan (Dunia & Akhirat)</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-4">
                <div class="shadow d-flex align-items-center flex-column bd-highlight mb-1 p-2" style="height: 200px;">
                    <div class="p-2 bd-highlight"><img class="img-fluid" src="assets/img/program/3.png" width="70"
                            height="70"></div>
                    <div class="mt-auto p-2 bd-highlight">
                        <p style="color:#00a59a; font-size: 12pt; font-weight:bold; text-align:center">
                            Keseimbangan kecerdasan (Mencerdaskan IQ, EQ, dan SQ)</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-4">
                <div class="shadow d-flex align-items-center flex-column bd-highlight mb-1 p-2" style="height: 200px;">
                    <div class="p-2 bd-highlight"><img class="img-fluid" src="assets/img/program/3.png" width="70"
                            height="70"></div>
                    <div class="mt-auto p-2 bd-highlight">
                        <p style="color:#00a59a; font-size: 12pt; font-weight:bold; text-align:center">Menggunakan Liquid
                            Curriculum</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-4">
                <div class="shadow d-flex align-items-center flex-column bd-highlight mb-1 p-2" style="height: 200px;">
                    <div class="p-2 bd-highlight"><img class="img-fluid" src="assets/img/program/3.png" width="70"
                            height="70"></div>
                    <div class="mt-auto p-2 bd-highlight">
                        <p style="color:#00a59a; font-size: 12pt; font-weight:bold; text-align:center">Masa Observasi 1
                            semester</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-4">
                <div class="shadow d-flex align-items-center flex-column bd-highlight mb-1 p-2" style="height: 200px;">
                    <div class="p-2 bd-highlight"><img class="img-fluid" src="assets/img/program/3.png" width="70"
                            height="70"></div>
                    <div class="mt-auto p-2 bd-highlight">
                        <p style="color:#00a59a; font-size: 12pt; font-weight:bold; text-align:center">Assessment NPB, NHB,
                            NK</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-4">
                <div class="shadow d-flex align-items-center flex-column bd-highlight mb-1 p-2" style="height: 200px;">
                    <div class="p-2 bd-highlight"><img class="img-fluid" src="assets/img/program/3.png" width="70"
                            height="70"></div>
                    <div class="mt-auto p-2 bd-highlight">
                        <p style="color:#00a59a; font-size: 12pt; font-weight:bold; text-align:center">Character Integrated
                            Assessment (CIA)</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-4">
                <div class="shadow d-flex align-items-center flex-column bd-highlight mb-1 p-2" style="height: 200px;">
                    <div class="p-2 bd-highlight"><img class="img-fluid" src="assets/img/program/3.png" width="70"
                            height="70"></div>
                    <div class="mt-auto p-2 bd-highlight">
                        <p style="color:#00a59a; font-size: 12pt; font-weight:bold; text-align:center">Paket Lesson Plan
                            (PLP)</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 mt-4">
                <div class="shadow d-flex align-items-center flex-column bd-highlight mb-1 p-2" style="height: 200px;">
                    <div class="p-2 bd-highlight"><img class="img-fluid" src="assets/img/program/3.png" width="70"
                            height="70"></div>
                    <div class="mt-auto p-2 bd-highlight">
                        <p style="color:#00a59a; font-size: 12pt; font-weight:bold; text-align:center">Islamic Technology
                            Mindset Installation (ITMI)</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 mt-4">
                <div class="shadow d-flex align-items-center flex-column bd-highlight mb-1 p-2" style="height: 200px;">
                    <div class="p-2 bd-highlight"><img class="img-fluid" src="assets/img/program/3.png" width="70"
                            height="70"></div>
                    <div class="mt-auto p-2 bd-highlight">
                        <p style="color:#00a59a; font-size: 12pt; font-weight:bold; text-align:center">Arabic with middle
                            east College Oriented.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 mt-4">
                <div class="shadow d-flex align-items-center flex-column bd-highlight mb-1 p-2" style="height: 200px;">
                    <div class="p-2 bd-highlight"><img class="img-fluid" src="assets/img/program/3.png" width="70"
                            height="70"></div>
                    <div class="mt-auto p-2 bd-highlight">
                        <p style="color:#00a59a; font-size: 12pt; font-weight:bold; text-align:center">Rasio Ideal
                            Pendidikan (1; 6)</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 mt-4">
                <div class="shadow d-flex align-items-center flex-column bd-highlight mb-1 p-2" style="height: 200px;">
                    <div class="p-2 bd-highlight"><img class="img-fluid" src="assets/img/program/3.png" width="70"
                            height="70"></div>
                    <div class="mt-auto p-2 bd-highlight">
                        <p style="color:#00a59a; font-size: 12pt; font-weight:bold; text-align:center">Quran Character
                            Building (QCB)</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 mt-4">
                <div class="shadow d-flex align-items-center flex-column bd-highlight mb-1 p-2" style="height: 200px;">
                    <div class="p-2 bd-highlight"><img class="img-fluid" src="assets/img/program/3.png" width="70"
                            height="70"></div>
                    <div class="mt-auto p-2 bd-highlight">
                        <p style="color:#00a59a; font-size: 12pt; font-weight:bold; text-align:center">Mental Belajar</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 mt-4">
                <div class="shadow d-flex align-items-center flex-column bd-highlight mb-1 p-2" style="height: 200px;">
                    <div class="p-2 bd-highlight"><img class="img-fluid" src="assets/img/program/3.png" width="70"
                            height="70"></div>
                    <div class="mt-auto p-2 bd-highlight">
                        <p style="color:#00a59a; font-size: 12pt; font-weight:bold; text-align:center">Interprenurship &
                            Technopreneurship</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 mt-4">
                <div class="shadow d-flex align-items-center flex-column bd-highlight mb-1 p-2" style="height: 200px;">
                    <div class="p-2 bd-highlight"><img class="img-fluid" src="assets/img/program/3.png" width="70"
                            height="70"></div>
                    <div class="mt-auto p-2 bd-highlight">
                        <p style="color:#00a59a; font-size: 12pt; font-weight:bold; text-align:center">Technopark Inkubator
                            Quranic</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 mt-4">
                <div class="shadow d-flex align-items-center flex-column bd-highlight mb-1 p-2" style="height: 200px;">
                    <div class="p-2 bd-highlight"><img class="img-fluid" src="assets/img/program/3.png" width="70"
                            height="70"></div>
                    <div class="mt-auto p-2 bd-highlight">
                        <p style="color:#00a59a; font-size: 12pt; font-weight:bold; text-align:center">Mutginin Oriented
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 mt-4">
                <div class="shadow d-flex align-items-center flex-column bd-highlight mb-1 p-2" style="height: 200px;">
                    <div class="p-2 bd-highlight"><img class="img-fluid" src="assets/img/program/3.png" width="70"
                            height="70"></div>
                    <div class="mt-auto p-2 bd-highlight">
                        <p style="color:#00a59a; font-size: 12pt; font-weight:bold; text-align:center">Materi Related
                            dengan dunia nyata (dunia keria/industri)</p>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="informasipsb my-5 mx-3">
        <div class="container warna-si-oren p-5 text-center" style="border-radius: 50px">
            <div class="row">
                <div class="col-sm-12">
                    <h2 style="color:white">Pendaftaran Santri Baru</h2>
                    <h2 class="text-white">Sekolah Impian</h2>
                    <p style="font-size: 16pt">Tahun Pelajaran 2024/2025</p>
                    <h1 style="color: white" class="mb-2">Kuota Terbatas</h1>
                    <a href="https://psb.sekolahimpian.com" target="_blank" class="btn btn-primary"
                        style="background-color: #00a59a; color: white; padding: 10px 30px">
                        DAFTAR SEKARANG <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="fixed-bottom text-center hero-banner">
        <a href="https://psb.sekolahimpian.com" target="_blank" class="btn btn-primary"
            style="background-color: #00a59a; color: white; padding: 10px 30px">
            DAFTAR SEKARANG <i class="fas fa-arrow-right ml-2"></i>
        </a>
    </div>




    <!--====== Contact Map End ======-->
@endsection

@section('footer')
@endsection
