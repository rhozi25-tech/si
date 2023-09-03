@extends('layouts/main')
@section('isi')
    <div class="kurikulum">
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-sm-12 text-center">
                    <h1>Kurikulum SI</h1>
                    <p>Sekolah Impian menggunakan Kurikulum Liquid</p>

                    
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">Arti LC</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">Moto</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="messages-tab" data-toggle="tab" data-target="#messages"
                                type="button" role="tab" aria-controls="messages" aria-selected="false">Tujuan
                                Belajarnya</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="settings-tab" data-toggle="tab" data-target="#settings"
                                type="button" role="tab" aria-controls="settings" aria-selected="false">Materi Yang
                                Diajari</button>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content"
                        style="border: 1px solid rgb(199, 199, 199); box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;">
                        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab"
                            style="text-align: left; padding: 5px; margin-top: 10px; font-size: 14pt;">
                            <h5>Arti Licuid Curiculum</h5>
                            <br>
                            <p>Liquid artinya cair, yaitu mengikuti atau menyesuaikan kondisi peserta didik Jadi Licuid
                                Curriculum artinya ; "Kurikulum yang dalam mencapai tujuan pendidikannya menyesuaikan
                                kondisi peserta didiknya." Bagaikan air yang mengisi apapun, dia selalu menyesuaikan diri
                                persis seperti bentuk benda yang diisinya.</p>
                        </div>
                        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab"
                            style="text-align: left; padding: 5px; margin-top: 10px; font-size: 14pt;">
                            <h5>Moto Licuid Curiculum</h5>
                            <p>Moto LC adalah “Mendidik, Membentuk, dan Memberi Makna”. berikut penjelasannya :</p>
                            <p>

                            <ol style="margin-left: 15px; text-algin:justify">
                                <li>“Mendidik” adalah upaya meningkatkan potensi manusia agar menjadi Insan Kamil. istilah
                                    mendidik lebih mengarah kepada kecerdasan IQ / kognitif.</li>
                                <li>“Membentuk”, maksudnya adalah ; semua anak dibentuk oleh 3 faktor utama ; Ortu (pola
                                    asuh), sekolah (Pola didik), & lingkungan. Disini LC menekankan kepada terbentuknya
                                    kerjasama dan sinkronisasi antara pola asuh di rumah dengan pola didik di sekolah.
                                    istilah membentuk lebih mengarah kepada kecerdasan EQ/ afektif/pembentukan karakter.
                                </li>
                                <li>Arti dari “Memberi makna” adalah ; manusia harus mulia di Akhirat dengan Al-Quran
                                    sekaligus mulia di dunia dengan teknologi bisnis dan dakwah. itulah makna yang ingin
                                    diberikan kepada ananda. istilah memberi makna lebih mengarah kepada kecerdasan
                                    SQ/nilai/beragama.</li>
                            </ol>

                            <p>Semua itu (Mendidik, Membentuk, dan Memberi Makna) harus dilakukan cara selembut air, yakni
                                berdasarkan pendekatan cinta dan mindset mendidik ( tuntutan anak).</p>
                            </p>
                        </div>
                        <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab"
                            style="text-align: left; padding: 5px; margin-top: 10px; font-size: 14pt;">
                            <h5>Tujuan Belajarnya</h5>
                            <br>
                            <p><b>LC fokus pada 2 Orientasi Belajar</b>, yaitu dunia & Akhirat. Tidak hanya bertujuan untuk
                                sukses dalam kehidupan dunia saja, tetapi juga mencapai kesuksesan akhirat.</p>
                        </div>
                        <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab"
                            style="text-align: left; padding: 5px; margin-top: 10px">
                            <h5>Materi yang diajarkan</h5>
                            <p>

                            <ol style="margin-left: 15px; text-algin:justify; font-size: 14pt;">
                                <li>LC fokus pada 2 mapel terpenting dan strategis, yaitu Tahfizhul Quran dan Teknologi.
                                    oleh karena itu dua mapel ini mendapatkan slot waktu atau durasi belajar yang paling
                                    banyak dibanding mapel-mapel turunannya. misalnya mapel turunan dari tahfizh adalah ;
                                    Bahasa Arab, Aqidah, Akhlaq, Fiqh. dan mapel turunan bidang TIK, seperti bahasa inggris,
                                    sejarah technopreneurship, dan startupologi.</li>
                                <li>LC fokus pada pembangunan 3 mental utama. yaitu 1)Mental Belajar. 2) ITMI (Islamic
                                    Technology Mindset Installation). dan 3) Mental K2IAM(Kreatif, Kompetitif, Inovatif,
                                    Antisipatif, dan mampu Me-monetisasi).</li>
                            </ol>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
