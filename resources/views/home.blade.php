@extends('layouts/main')
@section('isi')
    <!--====== Banner Slider Start ======-->
    <section class="banner-slider banner-slider-two banner-slider-active">
        <div class="single-banner" style="background-image: url(assets/img/header.jpg)">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9">
                        <div class="banner-text">
                            <div class="banner-content">
                                <span data-animation="fadeInUp" data-delay="0.3s" class="title-tag">
                                    Assalamualaikum wr.wb
                                </span>
                                <h1 data-animation="fadeInLeft" data-delay="0.6s" class="title">
                                    Selamat Datang di <b style="color: #f6921f">Sekolah Impian</b>
                                </h1>
                                <p data-animation="fadeInLeft" data-delay=".9s">
                                    Mulia di Akhirat dengan menghafal Al-Quran dan Mulia di Dunia dengan Teknologi, Bisnis
                                    dan Dakwah
                                </p>
                                <a data-animation="fadeInUp" data-delay="1.1s"
                                    class="informasi-btn rounded-btn icon-right small-size" href="/tentang">
                                    Tentang Sekolah Impian <i class="fal fa-long-arrow-right"></i>
                                </a>
                                <a data-animation="fadeInUp" data-delay="1.1s"
                                    class="daftar-btn rounded-btn icon-right small-size"
                                    href="https://psb.sekolahimpian.com">
                                    Pendaftaran Santri Baru <i class="fal fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!--====== Banner Slider End ======-->

    <div class="unggulan">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center mt-5 mb-5">
                    <h2>Program Unggulan</h2>
                </div>
            </div>
            <div class="row mb-5 text-center">
                <div class="col-sm-3 mb-5">
                    <div class="prog d-flex flex-column justify-content-center align-items-center"
                        style="height: 200px; transition: all ease 0.4s;">
                        <img class="img-fluid" src="assets/img/program/2.png" width="100" height="100" alt="">
                        <h4 class="mt-2">Tahfizh</h4>
                    </div>
                </div>
                <div class="col-sm-3 mb-5">
                    <div class="prog d-flex flex-column justify-content-center align-items-center"
                        style="height: 200px; transition: all ease 0.4s;">
                        <img class="img-fluid" src="assets/img/program/1.png" width="100" height="100" alt="">
                        <h4 class="mt-2">Teknologi Informasi</h4>
                    </div>
                </div>

                <div class="col-sm-3 mb-5">
                    <div class="prog d-flex flex-column justify-content-center align-items-center"
                        style="height: 200px; transition: all ease 0.4s;">
                        <img class="img-fluid" src="assets/img/program/3.png" width="100" height="100" alt="">
                        <h4 class="mt-2">Karakter</h4>
                    </div>
                </div>
                <div class="col-sm-3 mb-5">
                    <div class="prog d-flex flex-column justify-content-center align-items-center"
                        style="height: 200px; transition: all ease 0.4s;">
                        <img class="img-fluid" src="assets/img/program/4.png" width="100" height="100" alt="">
                        <h4 class="mt-2">Bahasa</h4>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <div class="why mb-5">
        <div class="container">
            <div class="row shadow-lg p-3">
                <div class="col-sm-6">
                    <h2 class="mt-3 mb-4">Mengapa memilih Sekolah Impian ?</h2>
                    <p class="text-justify " style="font-size: 13pt">Sekolah ini adalah sekolah Impian bagi semua anak (smp
                        & sma / setara) yang punya niat dan tujuan
                        “Mulia di akhirat dengan AlQuran dan mulia di dunia dengan teknologi.” siapapun dia, bagaimanapun
                        dia. <br><br>

                        Yang sudah hebat akan semakin hebat, yang butuh pendampingan juga akan mendapatkan progresnya,
                        bahkan mungkin disinilah “Zero To Hero” mengenang kesuksesan pertamanya
                    </p>
                </div>

                <div class="col-sm-6">
                    <div class="embed-responsive embed-responsive-16by9">
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

    <div class="system_belajar" style="background-color: #00a59a">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center mt-5 mb-3 text-white">Bagaimana System Belajaranya ?</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <section class="">
                        <div class="container py-2 mt-20">
                            <article class="postcard light blue">
                                <a class="postcard__img_link" href="#">
                                    <img class="postcard__img" src="assets/img/lc.jpg" alt="Image Title" />
                                </a>
                                <div class="postcard__text t-dark">
                                    <h1 class="postcard__title blue"><a href="#">1. Menggunakan Liquid
                                            Curriculum</a>
                                    </h1>

                                    <div class="postcard__bar"></div>
                                    <div class="postcard__preview-txt">
                                        LC adalah kurikulum yang dalam mencapai tujuan pendidikannya ia menyesuaikan kondisi
                                        peserta didiknya. LC juga adalah kurikulum yang fokus kepada 2 orientasi (dunia
                                        akhirat), fokus pada 2 mapel utama (Quran & IT), dan fokus pada 3 mental utama
                                        (Mental belajar, ITMI, & K2IAM).
                                    </div>
                                </div>
                            </article>
                            <article class="postcard light red">
                                <a class="postcard__img_link" href="#">
                                    <img class="postcard__img" src="assets/img/IT.webp" alt="Image Title" />
                                </a>
                                <div class="postcard__text t-dark">
                                    <h1 class="postcard__title red"><a href="#">2. Belajar sesuai dengan situasi dan
                                            kondisi santri</a></h1>
                                    <div class="postcard__bar"></div>
                                    <div class="postcard__preview-txt">Santri yang memiliki kelebihan akan diberi
                                        pengajaran dengan system percepatan / akselerasi (timeline lebih cepat dan materi
                                        lebih banyak). Santri reguler akan diberi pengajaran yang sesuai dan dengan proses
                                        yang terbaik sesuai spesifikasinya. Setiap kelompok belajar inilah yang kami
                                        istilahkan dengan "Paket Lesson Plan ' atau disingkat PLP. Ada<b> PLP Reguler</b>,
                                        ada <b>PLP Akselerasi.</b></div>

                                </div>
                            </article>
                            <article class="postcard light green">
                                <a class="postcard__img_link" href="#">
                                    <img class="postcard__img" src="assets/img/system-belajar.webp" alt="Image Title" />
                                </a>
                                <div class="postcard__text t-dark">
                                    <h1 class="postcard__title green"><a href="#">3. System belajar di LC</a></h1>
                                    <div class="postcard__bar"></div>
                                    <div class="postcard__preview-txt">
                                        setelah santri masuk ke pondok, mereka akan melalui 3 tahapan penting : <br>
                                        <b>1. Masa Observasi</b><button type="button" class="btn btn-link"
                                            data-toggle="modal" data-target="#observasi"> Selengkapnya </button> <br>
                                        <b>2. Student Prediction</b><button type="button" class="btn btn-link"
                                            data-toggle="modal" data-target="#prediction"> Selengkapnya </button> <br>
                                        <b>3. Pasca Observasi</b><button type="button" class="btn btn-link"
                                            data-toggle="modal" data-target="#pasca"> Selengkapnya </button> <br>
                                    </div>

                                </div>
                            </article>

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    {{-- MODAL SYSTEM BELAJAR --}}
    <div class="modal fade" id="observasi">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">1. Masa Observasi</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    dilakukan diawal thn ajaran (selama 1 semester) semua santri di treatment dengan 10 Mapel berikut :
                    <ul class="list-group">
                        <li class="list-group-item">1. RBQ 1</li>
                        <li class="list-group-item">2. RBQ 2</li>
                        <li class="list-group-item">3. RHQ</li>
                        <li class="list-group-item">4. RAQ</li>
                        <li class="list-group-item">5. Pra QCB</li>
                        <li class="list-group-item">6. Penyeragaman Ibadah & Adab</li>
                        <li class="list-group-item">7. CFD 1</li>
                        <li class="list-group-item">8. CFD 2</li>
                        <li class="list-group-item">9. CFD 3</li>
                        <li class="list-group-item">10. ITMI</li>
                    </ul>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="prediction">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">2. Student Prediction</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    Setelah <b> Masa Observasi </b>, berdasarkan data-data yang didapat, pondok membuat Student Prediction,
                    prediksi tentang target belajar masing-masing santri, prediksi PLP apa yang paling tepat untuk mereka,
                    dan prediksi mapel khusus apa yang harus mereka pelajari selama di pondok.
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="pasca">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">3. Pasca Observasi</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    Pasca Observasi adalah masa normal dimana mereka akan mengkaji mapel-mapel berikut <br>
                    <b>DI LEVEL 1</b><br>
                    1. Tahfizh Linear, <br>
                    2. Tahfizh Tematik (QCB), <br>
                    3. IT Programing atau DKV, <br>
                    4. AAF (Aqidah, Akhlaq, Fiqh),<br>
                    5. B. Arab dan atau B. Inggris, <br>
                    6. Mentoring & Kemandirian (Tazkiatun Nafs & K2IAM 1), dan Olah Raga. <br>

                    <br>
                    <b>DI LEVEL 2</b><br>
                    1. Tahfizh Maintenance,<br>
                    2. Hadits Tematik (HCB / 4 Module SAFT), <br>
                    3. Pengantar Ulumul Hadits, <br>
                    4. IT Pondasif (Sejarah technopreneurship, Matematika, Fisika, Bahasa Indonesia, dan Bhs Inggris), <br>
                    5. Startupologi, <br>
                    6. Mentoring Kemandirian (Module ; mental belajar dan K2IAM 2), dan Olahraga. <br>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    {{-- END MODAL SYSTEM BELAJAR --}}

    <div id="berita"></div>
    <!--====== Latest News Start ======-->
    <section class="latest-news section-gap secondary-bg">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-7">
                    <div class="section-title white-color text-center mb-40">
                        <h2 class="title mb-10">Berita dan Event <br> Sekolah Impian</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="latest-news-box-three mt-30">
                        <img src="assets/img/blog/monthly.webp" alt="Image">
                        <div class="post-content">
                            <span class="cat badge badge-success">Event</span>
                            <h5 class="title">
                                <a href="#">Monthly Journal</a>
                            </h5>
                            <small class="cat">26 September 2021</small>
                        </div>
                        <a href="#" class="news-link"><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="latest-news-box-three mt-30">
                        <img src="assets/img/blog/english camp.webp" alt="Image">
                        <div class="post-content">
                            <span class="cat badge badge-success">Event</span>
                            <h5 class="title">
                                <a href="#">English Camp Batch 1</a>
                            </h5>
                            <small class="cat">25 September 2021</small>
                        </div>
                        <a href="#" class="news-link"><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="latest-news-box-three mt-30">
                        <img src="assets/market_days.webp" alt="Image">
                        <div class="post-content">
                            <span class="cat badge badge-success">Event</span>
                            <h5 class="title">
                                <a href="#">Market Days Sekolah Impian</a>
                            </h5>
                            <small class="cat">11 September 2021</small>
                        </div>
                        <a href="#" class="news-link"><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="latest-news-box-three mt-30">
                        <img src="assets/img/blog/parent.webp" alt="Image">
                        <div class="post-content">
                            <span class="cat badge badge-success">Event</span>
                            <h5 class="title">
                                <a href="#">Parenthink Sekolah Impian</a>
                            </h5>
                            <small class="cat">5 September 2021</small>
                        </div>
                        <a href="#" class="news-link"><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Latest News End ======-->


    <!--====== Why Choose Us Start ======-->
    <section class="whu-section section-gap">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-6">
                    <div class="cta-content">
                        <h2 class="title">Informasi Pendaftaran Santri Baru</h2>
                        <div class="info p-3"
                            style="background-color: rgb(250, 215, 172); border-bottom-left-radius: 20px; border-bottom-right-radius: 20px">
                            <p style="font-size: 16pt">Pendaftaran akan dibuka <strong> 09 September 2023</strong></p>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6">
                    <a href="https://psb.sekolahimpian.com" class="btn btn-primary btn-lg">Daftar Disini</a>
                    <a href="#" class="btn btn-success btn-lg">Informasi PSB</a>
                </div>
            </div>
        </div>
    </section>
    <!--====== Call to action Start ======-->
    <div id="kontak"></div>
    <section class="call-to-action-four section-gap" style="background-image: url(assets/img/cta-bg/cta-bg-4.jpg)">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-4">
                    <div class="cta-content">
                        <span class="title-tag">Informasi Lengkap</span>
                        <h3 class="title">Kontak Kami Sekarang</h3>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="cta-btns">
                        <div class="cta-btn">
                            <p>Mail Us</p>
                            <span>admin@sekolahimpian.com</span>
                            <i class="fal fa-envelope"></i>
                        </div>
                        <div class="cta-btn cta-btn-2">
                            <p>Kontak Whatsapp</p>
                            <span>0816-1123-811 <br> atau <br> 0813-8566-5270</span>
                            <i class="fal fa-phone"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--====== Contact Map start ======-->
    <section class="contact-map">
        <div class="contact-map-one">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.925009996818!2d106.69447731537332!3d-6.656216666922858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69d0413a51008d%3A0x4216c9d21d02a98e!2sPondok%20Pesantren%20Fahim%20Quran%20Plus!5e0!3m2!1sid!2sid!4v1631198632992!5m2!1sid!2sid"
                style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
    <!--====== Contact Map End ======-->
@endsection

@section('footer')
@endsection
